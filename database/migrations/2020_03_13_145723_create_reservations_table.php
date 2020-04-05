<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('reservations');
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->dateTime('from');
            $table->dateTime('to');
            $table->string('note');
            $table->integer('car_id')->unsigned();
            $table->timestamps();
        });
           /* $table->bigIncrements('id');

            $table->bigInteger('customer_id');
            $table->bigInteger('renter_id');
            $table->bigInteger('returner_id');
            $table->bigInteger('car_id');

            $table->smallInteger('state');
            $table->string('note');
            $table->date('rent_date');
            $table->date('return_date');

           $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('renter_id')->references('id')->on('users');
            $table->foreign('returner_id')->references('id')->on('users');
            $table->foreign('car_id')->references('id')->on('cars');
        });*/

        Schema::table('reservations', function($table)
        {
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
