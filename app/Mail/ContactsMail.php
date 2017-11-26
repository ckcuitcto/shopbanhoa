<?php

namespace App\Mail;

use App\ContactUs;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactsMail extends Mailable
{
    use Queueable, SerializesModels;


    public $contactUs;
    public $body;
    public $files;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactUs $contactUs, $body, array $files = null)
    {
        $this->contactUs = $contactUs;
        $this->body = strip_tags($body);
        $this->files = $files;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->markdown('emails.contacts')->subject('Cửa hàng Hoa Sài Gòn');
        foreach ($this->files as $file) {
            $email->attach($file);
        }
        return $email;
    }
}
