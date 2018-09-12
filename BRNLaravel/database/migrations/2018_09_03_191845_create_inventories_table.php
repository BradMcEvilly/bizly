<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('venue_id');
            $table->integer('capacity');
            $table->string('image_url');
            $table->string('thumb_url');
            $table->timestamps();
        });
        Schema::table('inventories', function($table) {
            $table->foreign('venue_id')->references('id')->on('venues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
