<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\add_bus;

class dashboardhomeController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('status');
      
    }


    function index()
    {
    	return view('dashboardpages/dashboardhome/dashhome');
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
