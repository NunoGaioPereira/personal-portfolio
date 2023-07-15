<?php

namespace App\Http\Controllers;

use App\Services\EmailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    private EmailService $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function send(Request $request)
    {
        $email = $request->email;
        $msg = $request->message;
        $name = $request->name;
        // dd($request->all());
        
        if($email == "" || $msg == "" || $name == "")
        {
            return back()->with(['alert' => 'Please fill in all fields.', 'alert_type' => 'error'])
            ->withInput($request->all());
        }
        
        $data = request()->validate([
            'name'    => 'required|string|min:1|max:255',
            'email'   => 'required|string|min:3|max:255',
            'message' => 'required|string|min:3',
        ]);

        $is_banned = $this->isBanned($email, $name);
        
        // @TODO Record transaction
        if (!$is_banned) {
            Mail::send('website.mail.inquiry', compact('data', 'msg'), function($mail) use ($data){
                $mail->from($data['email'], $data['name']);
                $mail->to('nunocgpereira@gmail.com')->subject('New Inquiry - ' . $data['name']);
            });
        }

        return back()->with(['alert' => 'Thank you for your message, I will get back to you as soon as possible.', 'alert_type' => 'success']);
    }

    private function isBanned($email, $name)
    {
        $banned_emails = $this->emailService->getBannedEmailsList();
        $banned_names = $this->emailService->getBannedNamesList();
        
        return in_array($email, $banned_emails) || in_array($name, $banned_names);
    }
}
