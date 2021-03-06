<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChooseRoleController extends Controller
{
    public function choose(){

        if(Auth::check()){

            if(Auth::user()->role == 'admin'){

                return redirect('/admin');

            }elseif(Auth::user()->role == 'user'){

                return redirect('/user');
                
            }else{

                abort(403);
            }

        }else{

            return redirect('/login');
        }
    }
}
