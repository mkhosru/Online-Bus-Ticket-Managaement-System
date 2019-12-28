<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\add_bus;
use App\BuyTicket;
use Auth;

class dashboardhomeController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('block');
        // $this->middleware('status');
      
    }


    function index()
    {
        $all_booked_ticket = BuyTicket::all();
    	return view('dashboardpages/dashboardhome/dashhome',compact('all_booked_ticket'));
    }


    // Admin view cancel list
    function cancel_list()
    {

        $single_info = BuyTicket::onlyTrashed();
        return view('dashboardpages/cancel',compact('single_info'));
    }

   

    // function add()
    // {
    // 	return view('dashboardpages/dashboardhome/addBus');
    // }


    //  function insert(Request $request)
    //  {
    //  	add_bus::insert([
          
    //       'Operator' =>$request->Operator, 
    //       'Departure' =>$request->Departure,
    //       'Duration' =>$request->Duration,
    //       'Distance' =>$request->Distance,
    //       'Arrival' =>$request->Arrival,
    //       'TotalSeat' =>$request->TotalSeat,
    //       'Fare' =>$request->Fare,
    //       'ViewSeats' =>$request->ViewSeats,

    //       ]);
     	
    //  }
}
