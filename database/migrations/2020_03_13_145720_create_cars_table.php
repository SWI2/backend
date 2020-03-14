<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('car_model_id');
            $table->bigInteger('thumbnail_id');

            $table->double('driven_kilometer');
            $table->integer('production_year');
            $table->float('pricing_per_day', 8, 2);

            // $table->foreign('thumbnail_id')->references('id')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
