<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\BuyTicket;
use Stripe;
use Session;
use App\Mail\TestMail;
use Mail;

class StripePaymentController extends Controller
{
     /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * $request->ticket_price,
                "currency" => "BDT",
                "source" => $request->stripeToken,
                "description" => "Paid", 

               
        ]);

        BuyTicket::find($request->check)->update([
        	'payment_status'=>1,
        ]);
        $ticket_price =$request->ticket_price;
        $customer_name = $request->customer_name;
        $customer_phone =$request->phone;
        $bus_name =$request->operator;
        $coach =$request->coach_type;
        $date =$request->journey_date;
        $time =$request->time;
        $depearture =$request->departure;
        $destination =$request->destination;
        $boarding =$request->boarding_point;
        $seat_number =$request->seat_number;
        $total_seat =$request->total_seat;
        $price =$request->price;
        $chassis =$request->dura_chassis_num;

        $allData = $ticket_price."|".$customer_name."|".$customer_phone."|".$bus_name."|".$coach."|".$date."|".$time."|".$depearture."|".$destination."|".$boarding."|".$seat_number."|".$total_seat."|".$price."|".$chassis;
      
        // Mail::to('khosru@gmail.com')->send(new TestMail($ticket_price,$customer_name,$customer_phone,$bus_name,$coach,$date,$time,$depearture,$destination,$boarding,$seat_number,$total_seat,$price,$chassis));

        Mail::to('khosru@gmail.com')->send(new TestMail($allData));

        Session::flash('success', 'Payment successful!');
          
        return redirect('/frontendpages/search');
       
    }

}
