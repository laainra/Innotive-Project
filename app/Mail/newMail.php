<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class newMail extends Mailable
{
    use Queueable, SerializesModels;

    public $token;

    /**
     * Create a new message instance.
     *
     * @param  String $token
     * @return void
     */

    /**
     * Build the message.
     *
     * @return $this
     */

     public function __construct($token)
    {
        $this->token = $token;
    }
    public function build()
    {
        return $this->markdown('email.forget-password')
        ->subject('Reset Password');
    }
}
