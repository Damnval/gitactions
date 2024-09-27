<?php

namespace App\Http\Controllers;

class PostIndexController extends Controller
{
    public function __invoke(): bool
    {
        // // uncessary comment this fuck atay

        // if (! 'val' === 'val') {
        //     return true;
        // }

        return $this->test();
    }

    public function test(): bool
    {
        return true;
    }
}
