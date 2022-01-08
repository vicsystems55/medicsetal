<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lead;

use App\Models\User;

use App\Models\Notification;

use Illuminate\Support\Facades\Http;

class LeadController extends Controller
{
    //
    public function register_lead(Request $request)
    {
            

        $response_token = Http::get('http://aweber.mindigo.co.uk/get-access-token.php');

        // return $response;
        $response = Http::withHeaders([
            'User-Agent' => 'AWeber-PHP-code-sample/1.0',
            'Authorization' => 'Bearer ' .$response_token,
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            
        ])->post('https://api.aweber.com/1.0/accounts/1620042/lists/6053195/subscribers',[
            'ad_tracking' => 'mindigo',
            
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

        $referrer_data = User::where('username', $request->username)->first();


        $lead = Lead::create([
            'referrer_id'=> $referrer_data->id,
            'lead_name'=> $request->name,
            'lead_email'=> $request->email,
            'lead_phone'=> $request->phone,
        ]);


        $notification = Notification::create([
            'performed_by' => $referrer_data->id,
            'title' => "New Lead",
            'log' => 'You have a new lead from your landing page!!'
        ]);


        return view('landing_pages.success');



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
