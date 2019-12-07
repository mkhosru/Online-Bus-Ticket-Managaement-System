<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyTicket extends Model
{
     protected $fillable = [   
		'customer_name','phone','operator','coach_type','journey_date','time','departure','destination','boarding_point','seat_number','total_seat','price','total_fare','dura_chassis_num','payment_status','ticket_token',



     ];
}
