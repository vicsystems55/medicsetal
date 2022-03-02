<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subscription;

use App\Models\Package;

use App\Models\User;

use Carbon\Carbon;

use Illuminate\Support\Facades\Mail;

use App\Mail\SubscriptionSuccessful;

use Illuminate\Support\Facades\Http;


class SubscriptionController extends Controller
{
    //

    public function register_subscription(Request $request)
    {

        $package = Package::find($request->package_id);

        $end_date = Carbon::now()->addMonth($package->duration);

        try {
            //code...
            $subscription = Subscription::updateOrCreate([
                'user_id' => $request->user()->id
            ],[
                'user_id' => $request->user()->id,
                'start_date' => Carbon::now(),
                'end_date' => $end_date,
                'package_id' => $request->package_id,
                'status' => 'active',
                  
            ]);

            // $lms_password = $request->user()->usercode .rand(100, 999);

            // try {
                
            //     $responsex = Http::withBasicAuth('admin', 'pureweb')-> post('https://edu.medicsetal.org/wp-json/wp/v2/users', [
            //         'name' => $request->user()->name,
            //         'username' => $request->user()->email,
            //         'first_name' => $request->user()->name,
            //         'last_name' => '',
            //         'email' => $request->user()->email,
                   
            //         'description' => '',
            //         'nickname' => $request->user()->usercode,
            //         'slug' => $request->user()->usercode,
            //         'roles' => 'subscriber',
            //         'password' => $request->user()->real_password ?? $lms_password,
            //         'locale' => 'en_US',
                  
            //     ]);

            //     // return $responsex;

            // } catch (\Throwable $thx) {
            // //     //throw $th;

            // //     return $thx;
            // }

            $datax = [
                'package_name' => $package->name,
                'logo' => $package->featured_image,
                'end_date' => $end_date,
                'users_name' => $request->user()->name,
                'lms_password' => $request->user()->real_password,
                'lms_username' => $request->user()->email
            ];

    
            // try {
                //code...
    
                try {
                    //code...
                    Mail::to($request->user()->email)
                    ->send(new SubscriptionSuccessful($datax));
        

                } catch (\Throwable $th) {
                    //throw $th;

                    return $th;
    
    
                }
    
    
            return response()->json([
                'subscription' => $subscription,
            
            ]);


        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }


    }

    public function admin_register_subscription(Request $request)
    {

        $user = User::find($request->user_id);

        $package = Package::find($request->package_id);

        $end_date = Carbon::now()->addMonth($package->duration);

        try {
            //code...
            $subscription = Subscription::updateOrCreate([
                'user_id' => $user->id
            ],[
                'user_id' => $user->id,
                'start_date' => Carbon::now(),
                'end_date' => $end_date,
                'package_id' => $request->package_id,
                'status' => 'active',
                  
            ]);

            // $lms_password = $request->user()->usercode .rand(100, 999);

            // try {
                
            //     $responsex = Http::withBasicAuth('admin', 'pureweb')-> post('https://edu.medicsetal.org/wp-json/wp/v2/users', [
            //         'name' => $request->user()->name,
            //         'username' => $request->user()->email,
            //         'first_name' => $request->user()->name,
            //         'last_name' => '',
            //         'email' => $request->user()->email,
                   
            //         'description' => '',
            //         'nickname' => $request->user()->usercode,
            //         'slug' => $request->user()->usercode,
            //         'roles' => 'subscriber',
            //         'password' => $request->user()->real_password ?? $lms_password,
            //         'locale' => 'en_US',
                  
            //     ]);

            //     // return $responsex;

            // } catch (\Throwable $thx) {
            // //     //throw $th;

            // //     return $thx;
            // }

            $datax = [
                'package_name' => $package->name,
                'logo' => $package->featured_image,
                'end_date' => $end_date,
                'users_name' => $user->name,
                'lms_password' => $user->real_password,
                'lms_username' => $user->email
            ];

    
            // try {
                //code...
    
                try {
                    //code...
                    Mail::to($user->email)
                    ->send(new SubscriptionSuccessful($datax));
        

                } catch (\Throwable $th) {
                    //throw $th;

                    return $th;
    
    
                }
    
    
            return response()->json([
                'subscription' => $subscription,
            
            ]);


        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }


    }
}
