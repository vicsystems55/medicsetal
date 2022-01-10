<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Package;

class LandingPageController extends Controller
{
    //

    public function index($username)
    {
        # code...

        $user = User::where('username', $username)->first();

        $packages = Package::get();

        if ($user) {
            # code...

            
        return view('landing_pages.page',[
            'username' => $username,
            'user' => $user,
            'packages' => $packages
        ]);


        }else{


            return view('landing_pages.error',[
                'packages' => $packages
               
            ]);


        }

    }
}
