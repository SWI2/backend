<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMalfunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('malfunctions');
        Schema::create('malfunctions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('car_id');

            $table->smallInteger('state');
            $table->string('short_description');
            $table->string('description');
            $table->float('total_cost');
            $table->date('discovery_date');
            $table->date('last_update_date');
            $table->date('repair_date');

           // $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('malfunctions');
    }
}
