<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registerterminal extends Model
{
    protected $fillable = [

    'reg_operator_id','reg_terminal_id',
    ];

     // function relationbetweenBusName()
     // {
     // 	return $this->hasOne('App\BusName','id','operator_id');
     // }

    //relation between Registerterminal and AddBus
    function relationbetweenAddBus()
    {
    	return $this->hasOne('App\AddBus','id','reg_operator_id');
    }

    //raltionbetweenTerminal
    function relationbetweenTerminal(){
    	return $this->hasOne('App\Terminal','id','reg_terminal_id');
    }
}

