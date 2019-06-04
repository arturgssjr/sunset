<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribeEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribe_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subscribe_id');
            $table->foreign('subscribe_id')->references('id')->on('subscribes');
            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscribe_events');
    }
}
