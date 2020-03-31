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
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');

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
