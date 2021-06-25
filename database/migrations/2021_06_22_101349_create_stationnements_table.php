<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationnementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stationnements', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tentree')->nullable();
            $table->dateTime('tsortie')->nullable();
            $table->bigInteger('voiture_id')->unsigned();
            $table->bigInteger('place_id')->unsigned();
            $table->timestamps();

            $table->foreign('voiture_id')->references('id')->on('voitures')->onDelete('cascade'); 
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stationnements');
    }
}
