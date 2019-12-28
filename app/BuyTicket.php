<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuyTicket extends Model
{

	use SoftDeletes;



     protected $fillable = [   
		'customer_name','phone','operator','coach_type','journey_date','time','departure','destination','boarding_point','seat_number','total_seat','price','total_fare','dura_chassis_num','payment_status','ticket_token',



     ];
}
