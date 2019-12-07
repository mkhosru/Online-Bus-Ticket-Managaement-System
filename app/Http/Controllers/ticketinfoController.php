<?php

namespace App\Http\Controllers;
Use Alert;
use Illuminate\Http\Request;
use App\BusName;
use App\Date;
use App\Departure;
use App\Destination;
use App\Price;
use App\Time;
use App\TotalSeat;
use App\Coach;
use App\Duration;
use App\Terminal;
use App\AddBus;
use App\Registerterminal;



class ticketinfoController extends Controller
{ 

     //Not found Page
    function not_found(){
        return view('dashboardpages/dashboardhome/dashnotfound');
    }




    
    // <-----------------------------------------Bus Name Start--------------------------------->
	//busname page
    function busname()
    {
    	$all_bus_names = BusName::all();
    	return view('dashboardpages/dashboardhome/ticketinfo/busname',compact('all_bus_names'));
    }

    //busname insert
     function busname_insert(Request $request)
     {

     	BusName::insert([

     	'operator_name' =>$request->operator_name,

     	]);
        //ALeart
         Alert::success('Success Bus Name', 'Success Message');

     	return back();
     }

     //busname edit
     function busname_edit($id)
     {
     		$single_busname = BusName::find($id);
     	return view('dashboardpages/dashboardhome/ticketinfo/edit/busnameEdit',compact('single_busname'));
     }

     //busname update
     function busname_update(Request $request){
     	BusName::find($request->id)->update([
     		'operator_name' =>$request->operator_name,
     	]);
     	return redirect(route('bus_busname'));
     }

     // BusName delete
     function busname_delete($id){
     	BusName::findOrFail($id)->delete();
     	return back();
     }

     // <-----------------------------------------Bus Name End--------------------------------->


     // <-----------------------------------------Bus date Start--------------------------------->

     // Date Page
    function date()
    {
    	$all_date = Date::all();//create variable to take all data
    	return view('dashboardpages/dashboardhome/ticketinfo/date',compact('all_date'));
    }

    // Date insert
    function date_insert(Request $request){
         Date::insert([
         'date' =>$request->date,

    	   ]);
    	return back();
    }

    //Bus date edit
    function date_edit($id)
    {
    	$single_date = Date::find($id);
    	return view('dashboardpages/dashboardhome/ticketinfo/edit/dateEdit',compact('single_date'));
    }

    // Bus date update
    function date_update(Request $request)
    {
    	Date::find($request->id)->update([

    		'date' =>$request->date,
    	]);
    	return redirect(route('bus_date'));

    }
     

    // Bus date delete
    function date_delete($id){
     Date::findOrFail($id)->delete();
     return back();
     }
   
    // <-----------------------------------------Bus date Start--------------------------------->




   // <-----------------------------------------Bus departure start--------------------------------->

    function departure()
    {	
    	$all_departure_name = Departure::all();
    	return view('dashboardpages/dashboardhome/ticketinfo/departure',compact('all_departure_name'));
    }


    function departure_insert(Request $request)
    {
      Departure::insert([
           'departure_name' =>$request->departure,
             ]);
         return back();

    }

    //Departure edit
    function departure_edit($id)
    {
    	$single_departure = Departure::find($id);
    	return view('dashboardpages/dashboardhome/ticketinfo/edit/departureEdit',compact('single_departure'));
    }

    //departure update
    function departure_update(Request $request)
    {
    	Departure::find($request->id)->update([

    		'departure_name' =>$request->departure,
    	]);
    	return redirect(route('bus_departure'));
    }

    //Departure Delete
    function departure_delete($id)
    {
    	Departure::findOrFail($id)->delete();
    	return back();
    }


// <-----------------------------------------Bus departure End--------------------------------->



// <-----------------------------------------Bus destination Start--------------------------------->
    //destination page
    function destination()
    {   
    	$all_destination_name = Destination::all();
    	return view('dashboardpages/dashboardhome/ticketinfo/destination',compact('all_destination_name'));
    }

    //Destination insert
    function destination_insert(Request $request)
    {
    	Destination::insert([
    		'destination_palce' =>$request->destination,
    	]);
    	 return back();
    }

    //Destination edit
    function destination_edit($id)
    {   
    	$single_destination = Destination::find($id);
    	return view('dashboardpages/dashboardhome/ticketinfo/edit/destinationEdit',compact('single_destination'));
    }

    //Destination update
    function destination_update(Request $request)
    {
    	Destination::find($request->id)->update([
    		'destination_palce' =>$request->destination,
    	]);
    	return redirect(route('bus_destination'));
    }
    
     // Destination delete
    function destination_delete($id){
     Destination::findOrFail($id)->delete();
     return back();
     }
   

// <-----------------------------------------Bus destination Enn--------------------------------->




// <-----------------------------------------Bus price start--------------------------------->


    //price page view
    function price()
    {    
    	$all_price = Price::all();
    	return view('dashboardpages/dashboardhome/ticketinfo/price',compact('all_price'));
    }

    //price insert
    function price_insert(Request $request)
    {
    	Price::insert([
    		'price' =>$request->price,
    	]);
    	return back();
    }
    //price edit
    function price_edit($id)
    {
    	$single_price = Price::find($id);
    	return view('dashboardpages/dashboardhome/ticketinfo/edit/priceEdit',compact('single_price'));
    }
    //price update
    function price_update(Request $request)
    {
    	Price::find($request->id)->update([
    		'price' =>$request->price,
    	]);
    	return redirect(route('bus_price'));
    }
    //price delete
    function price_delete ($id)
    {
    	Price::findOrFail($id)->delete();
    	return back();

    }
//
// <-----------------------------------------Bus price End--------------------------------->




// <-----------------------------------------Bus ticket start--------------------------------->


    function ticket()
    {
    	return view('dashboardpages/dashboardhome/ticketinfo/ticket');
    }
// <-----------------------------------------Bus ticket End--------------------------------->




 // <-----------------------------------------Bus time start--------------------------------->   
    function time()
    {	 
    	$all_bus_time = Time::all();
    	return view('dashboardpages/dashboardhome/ticketinfo/time',compact('all_bus_time'));
    }

    //Bus Time
    function time_insert(Request $request)
    {
    	Time::insert([
    		'time' =>$request->time,
               ]);
    	return back();
    }

    //Time edit
    function time_edit($id)
    {
    	$single_time = Time::find($id);
    	return view('dashboardpages/dashboardhome/ticketinfo/edit/timeEdit',compact('single_time'));
    }

    // Time update
    function time_update(Request $request)
    {
    	Time::find($request->id)->update([
    		'time' =>$request->time,
    	]);
    	return redirect(route('bus_time'));
    }

    //Time delete
    function time_delete($id)
    {
    	Time::findOrFail($id)->delete();
    	return back();
    }
    // <-----------------------------------------Bus time End--------------------------------->   




// <-----------------------------------------Bus totalseat start---------------------------------> 

    
    function totalseat()
    {	
    	$all_seat = TotalSeat::all();
    	return view('dashboardpages/dashboardhome/ticketinfo/totalseat',compact('all_seat'));
    }

    //Total seat insert
    function totalseat_insert(Request $request)
    {
    	TotalSeat::insert([
    		'total_seat' =>$request->total_seat,

    	]);
    	return back();
    }

    //TotalSeat Edit
    function totalseat_edit($id)
    {   
    	$single_totalseat = TotalSeat::find($id);
    	return view('dashboardpages/dashboardhome/ticketinfo/edit/totalseatEdit',compact('single_totalseat'));
    }

    // //TotalSeat Update
    function totalSeat_update(Request $request)
    {
    	TotalSeat::find($request->id)->update([
    		'total_seat' =>$request->total_seat,
    	]);
    	return redirect(route('bus_totalseat'));
    }

    
    // function totalseat_delete($id)
    // {
    // 	TotalSeat::findOrFail($id)->delete(),
    // 	return back();
    // }

    //TotalSeat delete
    function totalseat_delete($id)
    {
    	TotalSeat::findOrFail($id)->delete();
    	return back();
    }
// <-----------------------------------------Bus totalseat End---------------------------------> 




// <-----------------------------------------Bus Coach Type Start--------------------------------->
//Coach Type view page
    function coach()
    {   
        $all_coachs = Coach::all();
        return view('/dashboardpages/dashboardhome/ticketinfo/coach',compact('all_coachs'));
    }

//Coach Type Insert
    function coach_insert(Request $request)
    {
        Coach::insert([
            'coach_type' =>$request->coach_type,
        ]);
         Alert::success('Successfully Coach Type Added', 'Success');
        return back();
    }

    //Bus Coach Type Edit
    function coach_edit($id)
    {
         $single_coach = Coach::find($id);
        return view('/dashboardpages/dashboardhome/ticketinfo/edit/coachEdit',compact('single_coach'));
    }

    //Bus Coach Type Update
    function coach_update(Request $request)
    {
        Coach::find($request->id)->update([
            'coach_type' =>$request->coach_type,
        ]);
        Alert::success('Successfully Coach Type Updated', 'Success');
        return redirect(route('bus_coach'));
    }

    //Bus Coach Type delete
    function coach_delete($id)
    {
        Coach::findOrFail($id)->delete();
         Alert::success('Successfully Coach Type Deleted', 'Success');
        return back();
    }
// <-----------------------------------------Bus Coach Type End---------------------------------> 



// <-----------------------------------------Bus Duration start--------------------------------->

    // Bus Duration View page (Reaching hour)
    function duration()
    {  
        $all_durations = Duration::all();
        return view('/dashboardpages/dashboardhome/ticketinfo/duration',compact('all_durations'));
    }

   //Bus Duration Insert
    function duration_insert(Request $request)
    {
       Duration::insert([ 
        'duration' =>$request->duration,
       ]);
       Alert::success('Successfully Duration Added', 'Success');
       return back();
    }

    //Bus Duration Edit
    function duration_edit($id)
    {   
       $single_duration = Duration::find($id);
        return view('/dashboardpages/dashboardhome/ticketinfo/edit/durationEdit',compact('single_duration'));
    }

    //Bus Duration update
    function duration_update(Request $request)
    {
        Duration::find($request->id)->update([
            'duration' =>$request->duration,
        ]);
        return redirect(route('bus_duration'));
    }

    //Bus Duration update
    function duration_delete($id)
    {
        Duration::findOrFail($id)->delete();
        return back();
    }

// <-----------------------------------------Bus Duration End--------------------------------->




// <-----------------------------------------Bus Terminal Start---------------------------------> 

//Bus Treminal View Page
    function terminal()
    {   
        $all_terminal = Terminal::all();
        return view('/dashboardpages/dashboardhome/ticketinfo/terminal',compact('all_terminal'));
    }

    //Bus Terminal Insert
    function terminal_insert(Request $request)
    {
        Terminal::insert([
            'terminal_name' =>$request->terminal_name,
        ]);
        Alert::success('Successfully Treminal Added', 'Success');
        return back();
    } 

    //Bus Terminal Edit
    function terminal_edit($id)
    {
        $single_terminal = Terminal::find($id);
        return view('/dashboardpages/dashboardhome/ticketinfo/edit/terminalEdit',compact('single_terminal'));
    }

    //Bus Terminal Update
    function terminal_update(Request $request)
    {
        Terminal::find($request->id)->update([
            'terminal_name' =>$request->terminal_name,
        ]);
        return redirect(route('bus_terminal'));
    }


    //Bus Terminal Delete
    function terminal_delete($id)
    {
        Terminal::findOrFail($id)->delete();
        return back();
    }
// <-----------------------------------------Bus Terminal End--------------------------------->



// <-----------------------------------register Terminal Start--------------------------------->


    //Registered terminal
    function reg_terminal()
    {   $only_bus = AddBus::all();
        $only_terminal = Terminal::all();
        return view('dashboardpages/dashboardhome/ticketinfo/regterminal',compact('only_bus','only_terminal'));
    } 
    
    //Register Terminal Insert
    function reg_terminal_insert(Request $request)
    {
        Registerterminal::insert([
        'reg_operator_id' =>$request->reg_operator_id,
        'reg_terminal_id' =>$request->reg_terminal_id,
        ]);
        Alert::success('Successfully registered Treminal Added', 'Success');
        
        return back();
    }

    //register Terminal view list
    function reg_list()
    {
        $Reg_terminals = Registerterminal::all();
        return view('dashboardpages/dashboardhome/ticketinfo/reg_ter_list',compact('Reg_terminals'));
    }





 
// <-----------------------------------register Terminal End--------------------------------->

   
}
