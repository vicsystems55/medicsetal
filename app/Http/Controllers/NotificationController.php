<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Notification;

class NotificationController extends Controller
{
    //

    public function get_notifications(Request $request)
    {

        $notifications = Notification::where('performed_by', $request->user()->id)->latest()->get();
        
        
        return $notifications;

    }
}
