<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //

    public function index($username)
    {
        # code...

        return view('landing_pages.page');
    }
}
