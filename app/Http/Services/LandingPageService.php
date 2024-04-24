<?php

namespace App\Http\Services;

use App\Models\User;

class LandingPageService
{
    public function doSomething()
    {
        $rv = User::with('contact')->get();
        return $rv;
    }
}
