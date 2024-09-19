<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserIndexController extends Controller
{
    public function __invoke(): string
    {
        return User::query()->get();
    }
}
