<?php

namespace App\Policies;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function storeUser(User $user)
    {
        return Auth::user() && Auth::user()->role === 'admin';
    }
}
