<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\EmailTemplate;
use App\Models\User;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;




class change_password_account extends Mailable implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $user;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $user)
    {
        $this->user = $user;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //$template = EmailTemplate::find(3);
        $template = EmailTemplate::where("email_type_id", 3)->where("language", session('selected_language'))->get();
        if(count($template) >= 1)
        {
            $template = EmailTemplate::where("email_type_id", 3)->where("language", session('selected_language'))->first();
        }
        else{
            $template = EmailTemplate::where("email_type_id", 3)->first();
        }

        return $this->subject($template->object)->view('template_mail_change_password_account', ["template" => $template]);
    }
}
