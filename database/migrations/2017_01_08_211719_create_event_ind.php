<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventInd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_ind', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id_array', 255);
            $table->integer('event_id')->unsigned();;
            $table->text('content');
            $table->timestamps();
            $table->foreign('event_id')->references('id')->on('events')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_ind');
    }
}
