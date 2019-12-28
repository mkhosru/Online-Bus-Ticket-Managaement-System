<?php

namespace App\Http\Controllers;

use Alert;
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
use App\AddBus;

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

    //Add Bus Complete List insert
    	function insert_bus_info(Request $request)
    	{
         AddBus::insert([

         	'operator_id' =>$request->operator_id,
         	'from_id' =>$request->from_id,
         	'to_id' =>$request->to_id,
         	'coach_type_id' =>$request->coach_type_id,
         	'date_id' =>$request->date_id,
         	'time_id' =>$request->time_id,
         	'duration_id' =>$request->duration_id,
         	'totalseat_id' =>$request->totalseat_id,
         	'price_id' =>$request->price_id,
         ]);
         Alert::success('Successfully Bus route added', 'Successfully added');
         return back();
    	}

    	//Bus List View
    	function bus_list()
    	{
    		$all_addbus = AddBus::all();
    		$all_departure = Departure::all();
    		$all_destination = Destination::all();
    		$all_coach = Coach::all();
    		$all_date = Date::all();
    		$all_time = Time::all();
    		$all_duration = Duration::all();
    		$all_totalseat = TotalSeat::all();
    		$all_price = Price::all();
    		return view('/dashboardpages/dashboardhome/addbusview',compact('all_addbus','all_departure','all_destination','all_coach','all_date','all_time','all_duration','all_totalseat','all_price'));
    	}

        // Bus list Edit
        function bus_list_edit($id)
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

            $single_bus_edit = AddBus::find($id);
            return view('/dashboardpages/dashboardhome/addbusEdit',compact('single_bus_edit','busnames','departures','coachs','dates','times','durations','totalseats','prices','destinations'));
            // echo "string";
        
        }

        //Bus List Update
        function bus_list_update(Request $request)
        {
            AddBus::findOrFail($request->bus_id)->update([
                'operator_id' =>$request->operator_id,
                'from_id' =>$request->from_id,
                'to_id' =>$request->to_id,
                'coach_type_id' =>$request->coach_type_id,
                'date_id' =>$request->date_id,
                'time_id' =>$request->time_id,
                'duration_id' =>$request->duration_id,
                'totalseat_id' =>$request->totalseat_id,
                'price_id' =>$request->price_id,
            ]);
            return redirect(route('list_view'));
        }

        //Bus List delete
        function bus_list_delete($id)
        {
            AddBus::findOrFail($id)->delete();
            Alert::success('Bus List delete Successfully', 'Success Message');
            return back();
        }





}