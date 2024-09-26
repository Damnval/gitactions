<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PostIndexController extends Controller
{
    public function __invoke(): bool
    {
        // uncessary comment this ilne
        return $this->test();
    }

    public function test(): string
    {
        return true;
    }
}
