<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BuyTicket;
use Stripe;
use Session;

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
                "description" => $request->customer_name ."Paid", 
        ]);

        BuyTicket::find($request->check)->update([
        	'payment_status'=>1,
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return redirect('/frontendpages/search');
    }
}
