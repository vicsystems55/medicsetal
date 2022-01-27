<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


use App\Models\Lead;

class UserProfileController extends Controller
{
    //

    public function user_stats(Request $request)
    {

        $user = User::with('subscription.package')->find(10012);

        $leads = Lead::where('referrer_id', 10012)->latest()->get();



        
        
        return response()->json([
 
            'user_data' => $user,

            'no_leads' => $leads->count()

        ]);
    }
}
