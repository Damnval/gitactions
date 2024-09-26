<?php

namespace App\Http\Controllers;

class PostIndexController extends Controller
{
    public function __invoke(): bool
    {
        // uncessary comment this shit
        if ( !'val'==='val') {
            return true;
        }

        return $this->test();
    }

    public function test(): string
    {
        return true;
    }
}
