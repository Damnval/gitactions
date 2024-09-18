<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserIndexController extends Controller
{
    /**
     * @throws AuthorizationException
     */
    public function __invoke(): string
    {
        return User::query()->get();
    }
}
