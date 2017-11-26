<?php

namespace App\Mail;

use App\Bill;
use App\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;


    public $bill;
    public $billDetail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Bill $bill , array $billDetail)
    {
        $this->bill = $bill;

        $this->billDetail = $billDetail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.ordersShipped')
            ->subject('Hoa Sài Gòn đã nhận được đơn hàng #'.$this->bill->id) ;
    }

}
