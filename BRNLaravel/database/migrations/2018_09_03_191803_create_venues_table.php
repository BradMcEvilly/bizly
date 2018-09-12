<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('venue_type_id');
            $table->unsignedInteger('location_id');
            $table->string('name');
            $table->string('contact');
            $table->timestamps();
        });
        Schema::table('venues', function($table) {
            $table->foreign('venue_type_id')->references('id')->on('venue_types');
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venues');
    }
}
