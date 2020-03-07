<?php

namespace App\Mail;
use App\infoMsg;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewMessageNotification extends Mailable
{
    public $info;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(infoMsg $infoMsg)
    {
        $this->info = $infoMsg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('SnapMail')
            ->view('emails.email',[
                'name' => $this->info->name,
                'link'=>$this->info->code,
            ]);
    }
}
