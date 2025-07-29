<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Replay extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), 'MENJI Contact')
                    ->subject('Nouveau message de contact')
                    ->view('email.test')
                    ->with('data', $this->data);
    }
}
