<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Markdown;
use Illuminate\Queue\SerializesModels;

class SFMailableReply extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $company;
    public $charge;

    public function __construct($name, $email, $phone, $company, $charge)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->company = $company;
        $this->charge = $charge;
    }

    public function build()
    {
        $Subject = $this->name . ' quiere contactarte';

        return $this->markdown('emails.reply-template')
                    ->subject($Subject)
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'phone' => $this->phone,
                        'company' => $this->company,
                        'charge' => $this->charge,
                    ]);
    }
}
