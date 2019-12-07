<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddBus extends Model
{
    
	 protected $fillable = [

       'operator_id','from_id','to_id','coach_type_id','date_id','time_id','duration_id','totalseat_id','price_id',
       
       
     ];

     function relationbetweenBusName()
     {
     	return $this->hasOne('App\BusName','id','operator_id');
     }
     function relationbetweenDeparture()
     {
     	return $this->hasOne('App\Departure','id','from_id');
     }
     function relationbetweenDestination()
     {
     	return $this->hasOne('App\Destination','id','to_id');
     }
     function relationbetweenCoachType()
     {
     	return $this->hasOne('App\Coach','id','coach_type_id');
     }
     function relationbetweenDate()
     {
     	return $this->hasOne('App\Date','id','date_id');
     }
     function relationbetweenTime()
     {
     	return $this->hasOne('App\Time','id','time_id');
     }
     function relationbetweenDuration()
     {
     	return $this->hasOne('App\Duration','id','duration_id');
     }
     function realtionbetweenTotalseat()
     {
     	return $this->hasOne('App\TotalSeat','id','totalseat_id');
     }
     function relationbetweenPrice()
     {
     	return $this->hasOne('App\Price','id','price_id');
     }
}
