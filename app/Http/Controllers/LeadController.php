<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lead;

use App\Models\User;

use App\Models\Notification;

use Illuminate\Support\Facades\Http;

use App\Models\Package;

use Paystack;

use App\Models\Subscription;

use Carbon\Carbon;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;

use App\Mail\NewMember;

use App\Mail\SubscriptionSuccessful;



class LeadController extends Controller
{
    //
    public function register_lead(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            // 'amount' => 'required|numeric|min:99700|between:0,99.99',
            // 'number_of_accounts' => 'required|numeric|min:1|max:15',
            // 'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);
    

            try {
                //code...

                $response_token = Http::get('http://aweber.mindigo.co.uk/get-access-token.php');

                // return $response;
                $response = Http::withHeaders([
                    'User-Agent' => 'AWeber-PHP-code-sample/1.0',
                    'Authorization' => 'Bearer ' .$response_token,
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                    
                ])->post('https://api.aweber.com/1.0/accounts/1620042/lists/6190669/subscribers',[
                    'ad_tracking' => 'medics_et_al',
                    
                    'email' => $request->email,
                    'ip_address' => $request->ip(),
                    'last_followup_message_number_sent' => 0,
                    'misc_notes' => 'string',
                    'name' => $request->name,
                    'strict_custom_fields' => true,
                    'tags' => [
                      'slow',
                      'fast',
                      'lightspeed'
                    ]
                ]);
            } catch (\Throwable $th) {
                //throw $th;
            }

        $referrer_data = User::where('username', $request->username)->first();


        $lead = Lead::create([
            'referrer_id'=> $referrer_data->id,
            'lead_name'=> $request->name,
            'lead_email'=> $request->email,
            'lead_phone'=> $request->phone,
        ]);
            try {
                //code...

                $regCode = "MED" .rand(11100,999999);

                $new_user = User::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'username' => $request->email,
                        'usercode' => $regCode,
                        'sponsors_id' => $referrer_data->id,
                        'real_password' => $request->phone,
                        'password' => Hash::make($request->phone),
                ]);
            } catch (\Throwable $th) {
                //throw $th;
            }


        $notification = Notification::create([
            'performed_by' => $referrer_data->id,
            'title' => "New Lead",
            'log' => 'You have a new lead from your landing page!!'
        ]);

        $datax = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ];

        // try {
            //code...

            try {
                //code...
                Mail::to($request->email)
                ->send(new NewMember($datax));
    


            } catch (\Throwable $th) {
                //throw $th;


            }


        $packages = Package::get();


        return redirect("/subscribe-success?subscriber=".$request->email);



    }

    public function subscribe_success(Request $request)
    {

        $packages = Package::get();

        // dd($request->all());

        


        return view('landing_pages.success',[
            'packages' => $packages,
            'subscriber_email' => $request->subscriber??''
        ]);
    }

    public function payment_success()
    {

        // $packages = Package::get();

        // $paymentDetails = Paystack::getPaymentData();

        // $amount_paid = $paymentDetails['data']['amount'];

        // $payer_email = $paymentDetails['data']['customer']['email'];

        // $package = Package::where('fee', $amount_paid/100)->first();

        // $referrer_data = Lead::where('lead_email', $payer_email)->first();

        // // $referrer_data->referrer->usercode;

        // // dd($paymentDetails); 

        // $regCode = "MED" .rand(11100,999999);

                
        // $user = User::create([
        //     'name' => $payer_email,
        //     'email' => $payer_email,
        //     'username' => $payer_email,
        //     'usercode' => $regCode,
        //     'sponsors_id' =>  $referrer_data->referrer->usercode,
        //     'real_password' => uniqid(),
        //     'password' => Hash::make(uniqid()),
        // ]);


        // // $package = Package::find($package->id);

        // $end_date = Carbon::now()->addMonth($package->duration);

        // try {
        //     //code...
        //     $subscription = Subscription::create([
        //         'user_id' => $user->id,
        //         'start_date' => Carbon::now(),
        //         'end_date' => $end_date,
        //         'package_id' => $package->id,
        //         'status' => 'active',
                  
        //     ]);

        //     $lms_password = $user->usercode .rand(100, 999);

        //     try {
                
        //         $responsex = Http::withBasicAuth('admin', 'pureweb')-> post('https://edu.medicsetal.org/wp-json/wp/v2/users', [
        //             'name' => $payer_email,
        //             'username' => $payer_email,
        //             'first_name' => $payer_email,
        //             'last_name' => '',
        //             'email' => $payer_email,
                   
        //             'description' => '',
        //             'nickname' => $user->usercode,
        //             'slug' => $user->usercode,
        //             'roles' => 'subscriber',
        //             'password' => $user->real_password ?? $lms_password,
        //             'locale' => 'en_US',
                  
        //         ]);

        //         // return $responsex;

        //     } catch (\Throwable $thx) {
        //     //     //throw $th;

        //     //     return $thx;
        //     }

        //     $datax = [
        //         'package_name' => $package->name,
        //         'logo' => $package->featured_image,
        //         'end_date' => $end_date,
        //         'users_name' => $user->name,
        //         'lms_password' => $user->real_password,
        //         'lms_username' => $user->email
        //     ];

    
        //     // try {
        //         //code...
    
        //         try {
        //             //code...
        //             Mail::to($user->email)
        //             ->send(new SubscriptionSuccessful($datax));
        

        //         } catch (\Throwable $th) {
        //             //throw $th;

        //             return $th;
    
    
        //         }
    
    
        //     return response()->json([
        //         'subscription' => $subscription,
            
        //     ]);


        // } catch (\Throwable $th) {
        //     //throw $th;

        //     // return $th;

        //     return redirect('/account_success');
        // }


        return redirect('/account_success');




      


        // return view('landing_pages.success_paid',[
        //     'packages' => $packages
        // ]);
    }

    public function account_success()
    {
        
        
        return view('landing_pages.success_paid',[
           
        ]);
    }


    public function get_leads(Request $request)
    {
        # code...

        $leads = Lead::where('referrer_id', $request->user()->id)->latest()->get();
        
        
        return response()->json([
            'leads' => $leads,
 
        ]);
    }
}
