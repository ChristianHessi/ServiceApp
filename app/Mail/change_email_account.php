<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\EmailTemplate;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;


class change_email_account extends Mailable implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $user;
    public $new_email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $donnees)
    {
        $this->user = $donnees['user'];
        $this->new_email = $donnees['new_email'];
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //$template = EmailTemplate::find(2);
        $template = EmailTemplate::where("email_type_id", 2)->where("language", session('selected_language'))->get();
        if(count($template) >= 1)
        {
            $template = EmailTemplate::where("email_type_id", 2)->where("language", session('selected_language'))->first();
        }
        else{
            $template = EmailTemplate::where("email_type_id", 2)->first();
        }

        return $this->subject($template->object)->view('template_mail_change_email_account', ["template" => $template]);
    }
}
