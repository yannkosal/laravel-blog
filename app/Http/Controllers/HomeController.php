<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $recentPosts = Cache::remember('recentPosts', Carbon::now()->addDay(), function () {
            return Post::published()->featured()->with('categories')->latest('published_at')->take(3)->get();
        });

        $lastestPosts = Cache::remember('latestPosts', Carbon::now()->addDays(7), function () {
            return Post::published()->featured()->with('categories')->latest('published_at')->take(3)->get();
        });

        return view('home', [
            'recentPosts' => $recentPosts,
            'latestPosts' => $lastestPosts
        ]);
    }
}
