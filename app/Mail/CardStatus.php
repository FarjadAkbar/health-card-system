<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use App\Card;

class CardStatus extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $card;
    public $data;
    public function __construct(Card $card, $data)
    {
        $this->card = $card;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.card-status')
            ->from('no-reply@samacardsbh.com', 'Sama Card')
            ->subject($this->data->subject)
            ->with([
                'subject' => 'Reply From' . $this->card->name,
                'mailto_body' => 'this is response email'
            ]);
    }

}
