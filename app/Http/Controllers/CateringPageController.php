<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\LandingPageService;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

//
// The Controller
//
// Mission: to parse and validate request data; pass off request handling to service(s); marshall response data
class CateringPageController extends Controller
{

    public function view(Request $request, LandingPageService $service) {
        $rv = $service->doSomething();
        return Inertia::render('CateringPage');
    }
}