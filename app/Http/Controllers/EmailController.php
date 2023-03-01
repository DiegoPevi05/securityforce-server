<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SFMailable;
use App\Mail\SFMailableReply;
use App\Mail\SFMailableReplyJob;


class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Check the Authorization header
        $authHeader = $request->header('Authorization');
        if ($authHeader !== 'sfserver2023') {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $company = $request->input('company');
        $charge = $request->input('charge');

        $mailable = new SFMailable($name);

        Mail::to($email)
            ->send($mailable);

        $mailableReply = new SFMailableReply($name, $email, $phone, $company, $charge);

        Mail::to('info@securityforcema.com')
            ->cc(['hector.alarcon@securityforcema.com', 'yhon.meza@securityforcema.com'])
            ->send($mailableReply);
    }

    public function sendEmailJob(Request $request){
        $authHeader = $request->header('Authorization');
        if ($authHeader !== 'sfserver2023') {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $city = $request->input('city');

        $mailable = new SFMailable($name);

        Mail::to($email)
            ->send($mailable);

        $mailableReplyJob = new SFMailableReplyJob($name, $email, $phone, $city);

        Mail::to('info@securityforcema.com')
            ->cc(['hector.alarcon@securityforcema.com', 'yhon.meza@securityforcema.com'])
            ->send($mailableReplyJob);
    }

}
