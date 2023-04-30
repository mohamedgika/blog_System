<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{

    public function viewAny(User $user): bool
    {

    }


    public function view(User $user, Post $post): bool
    {
        // If Writer write this post or admin can make any thing
        return ($user->id === $post->user_id || $user->status == 'admin');
    }


    public function create(User $user): bool
    {

    }


    public function update(User $user, Post $post): bool
    {
    }


    public function delete(User $user, Post $post): bool
    {
    }


    public function restore(User $user, Post $post): bool
    {
    }


    public function forceDelete(User $user, Post $post): bool
    {
    }
}
