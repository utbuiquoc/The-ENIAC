<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use App\Models\Author;
use Illuminate\Auth\Access\Response;

use Illuminate\Support\Facades\Auth;

class CategoryPolicy
{
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
    public function view(User $user, Category $category): bool
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
    public function update(User $user, Category $category): bool
    {
        return sizeof(Author::where('user_id', $user->id)->get()) > 0;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Category $category): bool
    {
        return sizeof(Author::where('user_id', $user->id)->get()) > 0;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Category $category): bool
    {
        return sizeof(Author::where('user_id', $user->id)->get()) > 0;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Category $category): bool
    {
        return sizeof(Author::where('user_id', $user->id)->get()) > 0;
    }
}
