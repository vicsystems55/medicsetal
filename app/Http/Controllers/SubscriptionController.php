<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subscription;

use App\Models\Package;

use Carbon\Carbon;

use Illuminate\Support\Facades\Mail;

use App\Mail\SubscriptionSuccessful;


class SubscriptionController extends Controller
{
    //

    public function register_subscription(Request $request)
    {

        $package = Package::find($request->package_id);

        $end_date = Carbon::now()->addMonth($package->duration);

        try {
            //code...
            $subscription = Subscription::create([
                'user_id' => $request->user()->id,
                'start_date' => Carbon::now(),
                'end_date' => $end_date,
                'package_id' => $request->package_id,
                'status' => 'active',
                  
            ]);

            $datax = [
                'package_name' => $package->name,
                'logo' => $package->featured_image,
                'end_date' => $end_date,
                'users_name' => $request->user()->name
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
}
