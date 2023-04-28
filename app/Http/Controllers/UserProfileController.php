<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


use App\Models\Lead;

use App\Models\UserProfile;

class UserProfileController extends Controller
{
    //

    public function user_stats(Request $request)
    {


        try {
            //code...


                $user = User::with('subscription.package')->find($request->user()->id);

                $leads = Lead::where('referrer_id', $request->user()->id)->latest()->get();





                return response()->json([

                    'user_data' => $user,

                    'no_leads' => $leads->count()

                ]);



        } catch (\Throwable $th) {
            //throw $th;

            return $th;

        }

    }

    public function update_profile(Request $request)
    {
        # code...

        try {
            //code...

            $user_profile = UserProfile::updateOrCreate([
                'user_id' => $request->user()->id,
            ],[

                'bio' => $request->bio,
                'gender' => $request->gender,
                'nationality' => $request->nationality,
                'adddress' => $request->address,
                'phone' => $request->phone,
                'nok_fullname' => $request->nok_fullname,
                'nok_address' => $request->nok_address,
                'nok_relationship' => $request->nok_relationship,
                'nok_phone' => $request->nok_phone,
            ]);

            return $user_profile;
        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }


    }

    public function get_profile(Request $request)
    {
        # code...



        // return $request->user()->id;

        if ($request->user()->role == 'admin') {
            # code...

            $profiles = User::with('profile')->with('subscription.package')->latest()->get();

            return $profiles;
        }
        if ($request->user()->role == 'user') {
            # code...

            $profile = UserProfile::with('user')->where('user_id', $request->user()->id)->first();

            return $profile;
        }


    }
}
