<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBizlyEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bizly_events', function (Blueprint $table) {

            // FYI - I'd use $table->bigIncrements('id'); for this in the real world

            $table->increments('id');
            $table->unsignedInteger('venue_id');
            $table->unsignedInteger('event_type_id');
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('details');
            $table->string('image_url');
            $table->string('thumb_url');
            $table->timestamp('date_from');
            $table->timestamp('date_to');
            $table->timestamps();
        });
        Schema::table('bizly_events', function($table) {
            $table->foreign('venue_id')->references('id')->on('venues');
            $table->foreign('event_type_id')->references('id')->on('bizly_event_types');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bizly_events');
    }
}
