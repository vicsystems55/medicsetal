<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserProfileController extends Controller
{
    //

    public function user_stats(Request $request)
    {

        

        $user = User::with('subscription.package')->with('leads')->find(10012);

        

      
        
        return response()->json([
 
            'user_data' => $user,
            'no_leads' => $user->leads->count()

        ]);
    }
}
