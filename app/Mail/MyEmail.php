<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $my;

    /**
     * Create a new message instance.
     *
     * @return void
     */


    public function __construct($my)
    {
        $this->my = $my;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('190103276@stu.sdu.edu.kz')
                    ->view('mails.my')
                    ->text('mails.my_plain');
    }
}
