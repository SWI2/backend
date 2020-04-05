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
        Schema::dropIfExists('car_models');
        Schema::create('car_models', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name')->unique();
            $table->smallInteger('fuel_type');
            $table->smallInteger('gear');
            $table->smallInteger('number_of_seats');
            $table->smallInteger('car_type');
            $table->integer('power');
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
