<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Events\RewardUplineEvent;

use App\Models\User;

use App\Models\Package;

use Auth; 

use Paystack;

use Illuminate\Support\Facades\Redirect;


class PaymentController extends Controller
{
    //

    public function callback(Request $request)
    {
        # code...

        // return $request->user();

        try {
            //code...
            $package_id = 1;

            return event(new RewardUplineEvent(User::find($request->user()->id), Package::find($package_id) ));


        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }


    }

    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
