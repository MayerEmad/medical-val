<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class adminInvitationMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $thename='noOne';
    
    public function __construct($name)
    {
         $this->thename = $name;
    }
    
    public function build()
    {
       // print_r($this->thename);
        return $this->from('mayeremad5@gmail.com', 'Mailtrap')
            ->subject('SaidlyiaOnline admin Invitaion')
            ->markdown('Admin.admins.mail')
            ->with([
                'name' => $this->thename,
                'link' => URL::temporarySignedRoute('login',now()->addMinutes(10),['auc' => 0])
            ]);
    }
}
