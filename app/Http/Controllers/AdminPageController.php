<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class AdminPageController extends Controller
{
    //

    public function home()
    {


        return view('admin_dashboard.home');
    }

    public function landing_pages()
    {

        
        return view('admin_dashboard.landing_pages');
    }

    public function leads()
    {

        
        return view('admin_dashboard.leads');
    }

    public function lead($user_id)
    {

        
        return view('admin_dashboard.lead');
    }

    public function member($user_id)
    {

        
        return view('admin_dashboard.member');
    }

    public function members()
    {

        
        return view('admin_dashboard.members');
    }

    public function messages()
    {

        
        return view('admin_dashboard.messages');
    }

    public function notifications()
    {

        
        return view('admin_dashboard.notifications');
    }

    public function packages()
    {

        
        return view('admin_dashboard.packages');
    }

    public function package($package_id)
    {

        
        return view('admin_dashboard.package');
    }

    public function payout($payout_id)
    {

        
        return view('admin_dashboard.payout');
    }

    public function resources()
    {

        
        return view('admin_dashboard.resources');
    }

    public function settings()
    {

        
        return view('admin_dashboard.settings');
    }

    public function subscriptions()
    {

        
        return view('admin_dashboard.subscriptions');
    }

    public function subscription($subscription_id)
    {

        
        return view('admin_dashboard.subscription');
    }

}
