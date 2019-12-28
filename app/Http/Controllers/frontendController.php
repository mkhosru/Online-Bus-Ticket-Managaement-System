<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddBus;
use App\Price;
use App\TotalSeat;
use App\BusName;
use App\Time;
use App\Date;
use App\Departure;
use App\Destination;
use App\Registerterminal;
use App\User;
use App\Coach;
use App\Duration;
use App\BuyTicket;

use Auth;
// use App\Departure;
// use App\Destination;
// use App\Coach;
// use App\Date;
// use App\Time;
// use App\Duration;
// use App\TotalSeat;
// use App\Price;

class frontendController extends Controller
{
    // logout
    // function logout()
    // {
    //     return view('frontendpages/frontend/fronthome');
    // }

    //faq
    function faq(){
        return view('frontendpages/frontend/faq');
    }

    //Blog page
    function blog()
    {
        return view('frontendpages/frontend/blog');
    }

    //delete cofirmed ticket
    function ticket_delete($id)
    {
        BuyTicket::findOrFail($id)->delete();
        return back();
    }



    //view confirmed ticket
    function view_ticket(){
        $single_ticket = BuyTicket::all();
        return view('/frontendpages/viewticket',compact('single_ticket'));
    }
    



    function index()
    {
    	return view('frontendpages/frontend/fronthome');
    }

    function search()
    {  
        $all_addbus = AddBus::all();
        $departures = Departure::all();
        $destinations = Destination::all();
        $dates = Date::all();
    	return view('frontendpages/frontend/search',compact('all_addbus','departures','destinations','dates'));
    }

    function seat($id)
    {
        // seat selection
        $all_seat = null;

        $dura_chassis = AddBus::findOrFail($id)->duration_id;
        $chassis_no_dura = Duration::findOrFail($dura_chassis)->duration;

        $all_booked_ticket = BuyTicket::where('dura_chassis_num',$chassis_no_dura)->get();
        foreach ($all_booked_ticket as $key => $value) {
            $all_seat.=$value->seat_number;
        }
        $actual_seat = explode(",", $all_seat);
        array_pop($actual_seat);





        
        $single_price_id = AddBus::findOrFail($id)->price_id;
        $ticket_price = Price::findOrFail($single_price_id)->price;

        $boarding_point = Registerterminal::where('reg_operator_id',$id)->get();

        $single_total_seat_id = AddBus::findOrFail($id)->totalseat_id;
        $total_seat_id = TotalSeat::findOrFail($single_total_seat_id)->total_seat;

        $single_operator_id = AddBus::findOrFail($id)->operator_id;
        $bus_name =  BusName::findOrFail($single_operator_id)->operator_name;

        $single_time_id = AddBus::findOrFail($id)->time_id;
        $bus_time = Time::findOrFail($single_time_id)->time;

        $single_date_id = AddBus::findOrFail($id)->date_id;
        $bus_date = Date::findOrFail($single_date_id)->date;

        $single_departure_id = AddBus::findOrFail($id)->from_id;
        $bus_depearture = Departure::findOrFail($single_departure_id)->departure_name;

        $single_destination_id = AddBus::findOrFail($id)->to_id;
        $bus_destination = Destination::findOrFail($single_destination_id)->destination_palce;



        $customer = User::findOrFail(Auth::id())->FirstName;
        $customer_phone = User::findOrFail(Auth::id())->PhoneNumber;

        $single_coach_type = AddBus::findOrFail($id)->coach_type_id;
        $Bus_coach = Coach::findOrFail($single_coach_type)->coach_type;

        

        


    	return view('frontendpages/frontend/seat',compact('ticket_price','total_seat_id','bus_name','bus_time','bus_date','bus_depearture','bus_destination','boarding_point','customer','customer_phone','Bus_coach','chassis_no_dura','actual_seat'));
    }

    function sign()
    {
    	return view('frontendpages/frontend/login/signpage');
    }
    //About Page
    function about()
    {
        return view('frontendpages/frontend/about');
    }
    
    
    
    //User Info Check before ticket paymet
    function user_index()
    {
        return view('frontendpages/frontend/user/userinfo');
    }


    //User Search result (Bus List)
    function search_result( Request $request)

    {
        // return view('frontendpages/frontend/searchresult');
        $q = $request->start_point;
        $r = $request->end_point;
        $d = $request->date;
        $from = AddBus::where('from_id','LIKE','%'.$q.'%')
        ->where('to_id','LIKE','%'.$r.'%')
        ->where('date_id','LIKE','%'.$d.'%')
        ->get();
        
        if(count($from)>0)
        {
            return view('frontendpages/frontend/searchresult')->withDetails( $from)->withQuery($q,$r);
        }
        else
        {
            echo "page not found";
        }

    }

    //User Buy Ticket
    function user_buy_ticket(Request $request)
    {
        $single_ticket_info = $request;
        
        return view('frontendpages/frontend/user/userinfo',compact('single_ticket_info'));
    }


    // Buy ticket
    function buy_ticket(Request $request){
        $check = BuyTicket::insertGetId([
            'customer_name' =>$request->customer_name,
            'phone' =>$request->phone,
            'operator' =>$request->operator,
            'coach_type' =>$request->coach_type,
            'journey_date' =>$request->journey_date,
            'time' =>$request->time,
            'departure' =>$request->departure,
            'destination' =>$request->destination,
            'boarding_point' =>$request->boarding_point,
            'seat_number' =>$request->seat_number,
            'total_seat' =>$request->total_seat,
            'price' =>$request->price,
            'total_fare' =>$request->total_fare,
            'dura_chassis_num' =>$request->dura_chassis_num,
            'payment_status' =>0,
            'ticket_token' =>rand(),
        ]);
        if ($check) {
            $ticket_price = $request->total_fare;
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
            
            return view('stripe',compact('check','ticket_price','customer_name','customer_phone','bus_name','coach','date','time','depearture','destination','boarding','seat_number','total_seat','price','chassis'));
        }
        else{
            echo "Fail";
        }
    }



}
