<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostIndexController extends Controller
{
    public function __invoke(): string
    {
        return $this->test();
    }

    public function test(): string
    {
        return true;
    }
}
