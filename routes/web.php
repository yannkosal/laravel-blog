<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/blog', [PostController::class, 'index'])->name('posts.blog');
Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('posts.show');

// Route::get('/language/{locale}', function ($locale) {
//     if (array_key_exists($locale, config('app.supported_locales'))) {
//         session()->put('locale', $locale);
//     }
//     return redirect()->back();
// })->name('locale');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});
