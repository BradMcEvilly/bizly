<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendees', function (Blueprint $table) {

            // Lookup (many-to-many) table
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('bizly_event_id');
        });
        Schema::table('attendees', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bizly_event_id')->references('id')->on('bizly_events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendees');
    }
}
