<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPageController extends Controller
{
    //

    public function home()
    {
        
        return view('user_dashboard.home');
    }

    public function messages()
    {
        
        return view('user_dashboard.messages');
    }

    public function my_landing_page()
    {
        
        return view('user_dashboard.my_landing_page');
    }

    public function my_leads()
    {
        
        return view('user_dashboard.my_leads');
    }

    public function notifications()
    {
        
        return view('user_dashboard.notifications');
    }

    public function profile()
    {
        
        return view('user_dashboard.profile');
    }

    public function resources()
    {
        
        return view('user_dashboard.resources');
    }

    public function subscriptions()
    {
        
        return view('user_dashboard.subscriptions');
    }

    public function wallet()
    {
        
        return view('user_dashboard.wallet');
    }
}
