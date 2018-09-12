<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('bizly_event_id');
            $table->unsignedInteger('inventory_id');
            $table->timestamps();
        });
        Schema::table('bookings', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bizly_event_id')->references('id')->on('bizly_events');
            $table->foreign('inventory_id')->references('id')->on('inventories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
