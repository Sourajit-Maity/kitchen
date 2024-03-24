<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ForgetPassword extends Mailable
{
    use Queueable, SerializesModels;
    public $user,$link;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_id,$token)
    {
       $this->user = User::find($user_id);
    //    $this->link = route('admin.dashboard');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_NAME'), env('MAIL_FROM_NAME'))
                    ->view('email.forgot-password')
                    ->subject('Forgot Password');
    }
}
