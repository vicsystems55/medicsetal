<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class LandingPageController extends Controller
{
    //

    public function index($username)
    {
        # code...

        $user = User::where('username', $username)->first();

        if ($user) {
            # code...

            
        return view('landing_pages.page',[
            'username' => $username,
            'user' => $user
        ]);


        }else{


            return view('landing_pages.error',[
               
            ]);


        }

    }
}
