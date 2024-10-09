<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use App\Models\Author;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class PostPolicy
{
    public $author;

    public function __construct() {
        $this->author = Author::where('user_id', Auth::user()->id)->first();
    }
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return sizeof(Author::where('user_id', $user->id)->get()) > 0;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Post $post): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return sizeof(Author::where('user_id', $user->id)->get()) > 0;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Post $post): bool
    {
        return $post->author_id === $this->author->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Post $post): bool
    {
        return $post->author_id === $this->author->id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Post $post): bool
    {
        return $post->author_id === $this->author->id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Post $post): bool
    {
        return $post->author_id === $this->author->id;
    }
}
