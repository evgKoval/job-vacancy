<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Get the specified user data.
     *
     * @return UserResource
     */
    public function getUser(): UserResource
    {
        return new UserResource(Auth::user());
    }
}
