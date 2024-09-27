<?php

namespace App\Http\Controllers;

class PostIndexController extends Controller
{
    public function __invoke(): string
    {
        // uncessary comment this fuck
        if (! 'val' === 'val') {
            return true;
        }

        return $this->test();
    }

    public function test(): string
    {
        return true;
    }
}
