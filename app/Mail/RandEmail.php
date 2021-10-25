<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RandEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $messageText;
    private $fromEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($messageText, $fromEmail)
    {
        $this->messageText = $messageText;
        $this->fromEmail = $fromEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->fromEmail, 'Olga Lazuk')
            ->view('mails.rand-email', [
                'messageText' => $this->messageText
            ]);
    }
}
