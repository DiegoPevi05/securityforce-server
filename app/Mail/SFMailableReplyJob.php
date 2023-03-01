<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SFMailableReplyJob extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $city;

    public function __construct($name, $email, $phone, $city)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->city = $city;
    }

    public function build()
    {
        $Subject = $this->name . ' quiere trabajar con nosotros';


        return $this->view('emails.reply-job-template', [
                        'name' => $this->name,
                        'email' => $this->email,
                        'phone' => $this->phone,
                        'city' => $this->city,
                           ])
                    ->subject($Subject);
    }
}
