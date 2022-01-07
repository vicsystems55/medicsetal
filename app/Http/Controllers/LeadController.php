<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class LeadController extends Controller
{
    //
    public function subscribe_to_newsletter(Request $request)
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
    }
}
