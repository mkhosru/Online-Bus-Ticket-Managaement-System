<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    // public $ticket_price= ' ';
    // public $customer_name= ' ';
    // public $customer_phone= ' ';
    // public $bus_name= ' ';
    // public $coach= ' ';
    // public $date= ' ';
    // public $time= ' ';
    // public $depearture= ' ';
    // public $destination= ' ';
    // public $boarding= ' ';
    // public $seat_number= ' ';
    // public $total_seat= ' ';
    // public $price= ' ';
    // public $chassis= ' ';
    public $allData= ' ';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($allData)
    {
        // $this->ticket_price = $ticket_price;
        // $this->customer_name = $customer_name;
        // $this->customer_phone = $customer_phone;
        // $this->bus_name = $bus_name;
        // $this->coach = $coach;
        // $this->date = $date;
        // $this->time = $time;
        // $this->depearture = $depearture;
        // $this->destination = $destination;
        // $this->boarding = $boarding;
        // $this->seat_number = $seat_number;
        // $this->total_seat = $total_seat;
        // $this->price = $price;
        // $this->chassis = $chassis;
        $this->allData = $allData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $ticket_price ='';
        // $customer_name ='';
        // $customer_phone ='';
        // $bus_name ='';
        // $coach ='';
        // $date ='';
        // $time ='';
        // $depearture ='';
        // $destination ='';
        // $boarding ='';
        // $seat_number ='';
        // $total_seat ='';
        // $price ='';
        // $chassis ='';
        $allData ='';
        return $this->view('frontendpages.ticket_mail', compact('allData'));
    }
}
