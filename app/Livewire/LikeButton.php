<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LikeButton extends Component
{
    public Post $post;
    public function toggleLike()
    {
        if (!Auth::check()) {
            return $this->redirect(route('login'), true);
        }
        $user = Auth::user();
        if ($user->hasLiked($this->post)) {
            $user->Likes()->detach($this->post);
            return;
        }
        $user->Likes()->attach($this->post);
    }
    public function render()
    {
        return view('livewire.like-button');
    }
}
