<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_buses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('operator_id');
            $table->integer('from_id');
            $table->integer('to_id');
            $table->integer('coach_type_id');
            $table->integer('date_id');
            $table->integer('time_id');
            $table->integer('duration_id');
            $table->integer('totalseat_id');
            $table->integer('price_id');
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
        Schema::dropIfExists('add_buses');
    }
}
