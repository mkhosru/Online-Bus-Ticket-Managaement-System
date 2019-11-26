<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusName;
use App\Departure;
use App\Coach;
use App\Date;
use App\Time;
use App\Duration;
use App\TotalSeat;
use App\Price;
use App\Destination;

class addbusController extends Controller
{
    function add_bus()
    {


    	$busnames = BusName::all();
    	$departures = Departure::all();
    	$coachs = Coach::all();
    	$dates = Date::all();
    	$times = Time::all();
    	$durations = Duration::all();
    	$totalseats = TotalSeat::all();
    	$prices = Price::all();
    	$destinations = Destination::all();
    	return view('/dashboardpages/dashboardhome/addbus',compact('busnames','departures','coachs','dates','times','durations','totalseats','prices','destinations'));
    }
}
