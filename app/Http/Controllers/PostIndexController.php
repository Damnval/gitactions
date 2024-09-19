<?php

namespace App\Http\Controllers;

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
