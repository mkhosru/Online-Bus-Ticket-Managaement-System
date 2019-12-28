<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name');
            $table->integer('phone');
            $table->string('operator');
            $table->string('coach_type');
            $table->date('journey_date');
            $table->time('time');
            $table->string('departure');
            $table->string('destination');
            $table->string('boarding_point');
            $table->string('seat_number');
            $table->integer('total_seat');
            $table->integer('price');
            $table->integer('total_fare');
            $table->integer('dura_chassis_num');
            $table->integer('payment_status');
            $table->integer('ticket_token');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy_tickets');
    }
}
