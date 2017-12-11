<?php

namespace App\Mail;

use App\Bill;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class orderConfirm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $bill;
    public $emailType;

    public function __construct(Bill $bill , $emailType)
    {
        $this->bill = $bill;
        $this->emailType = $emailType;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email =  $this->markdown('emails.orderConfirm');

        if($this->emailType == 1)
        {
            $email->subject('Hoa Sài Gòn đã xác nhận thành công đơn hàng #'.$this->bill->id) ;
        }else{
            $email->subject('Hoa Sài Gòn đã hủy đơn đơn hàng #'.$this->bill->id) ;
        }
        return $email;
    }
}
