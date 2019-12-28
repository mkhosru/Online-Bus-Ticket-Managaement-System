<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BuyTicket;

class ReportController extends Controller
{
    function bus_report()
    {
    	$report = BuyTicket::all();
    	return view('/dashboardpages/report',compact('report'));
    }

    function report_info()
    {
    	
    	return view('/dashboardpages/reportinfo');
    }
    function report(Request $request){
        $bus_name='';
        $coach_type='';
        $departure ='';
        $destination ='';
        $date ='';
        $time='';
        $seat_number='';
        $total_seat =0;
        $chassis_no ='';
        $total_price=0;

        $all_info = BuyTicket::where('dura_chassis_num',$request->chassis)->get();
        foreach ($all_info as $key => $info) {
            $bus_name=$info->operator;
            $coach_type=$info->coach_type;
            $departure=$info->departure;
            $destination=$info->destination;
            $date=$info->journey_date;
            $time=$info->time;
            $seat_number.=$info->seat_number;
            $total_seat+=$info->total_seat;
            $chassis_no=$info->dura_chassis_num;
            $total_price+=$info->total_fare;
        }
        return view('dashboardpages.reportinfo',compact(
            'bus_name',
            'coach_type',
            'departure',
            'destination',
            'date',
            'time',
            'seat_number',
            'total_seat',
            'chassis_no',
            'total_price',
        ));
    }

    //
   
}
