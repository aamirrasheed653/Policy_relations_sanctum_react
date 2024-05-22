<?php

namespace App\Policies;

use App\Models\Author;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthorPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function viewAuthors(User $user): bool
    {
        return Auth::user() && Auth::user()->role === 'user';// TODO: Implement view() method.
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function updateAuthors(User $user, Author $author): bool
    {
        return Auth::user() && Auth::user()->role === 'admin';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Author $author): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Author $author): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Author $author): bool
    {
        //
    }
}
