<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('car_type_id');

            $table->string('name')->unique();
            $table->smallInteger('fuel_type');
            $table->smallInteger('gear');
            $table->smallInteger('number_of_seats');
            $table->integer('power');

            $table->foreign('car_type_id')->references('id')->on('car_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_models');
    }
}
