<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($client,$doctor,$booking,$type)
    {

        $this->client=$client;
        $this->doctor=$doctor;
        $this->booking=$booking;
        $this->type=$type;
   
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $client=$this->client;
        $doctor=$this->doctor;
        $booking=$this->booking;
        $type=$this->type;
        return $this->view('mail.bookingmail',compact('client','doctor','booking','type'));
    }
}
