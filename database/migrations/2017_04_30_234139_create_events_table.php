<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('title');
            $table->text('body');
            $table->string('goal1');
            $table->string('goal2');
            $table->string('goal3');
            $table->string('goal4');
            $table->string('goal5');
            $table->string('goal6');
            $table->string('goal7');
            $table->string('goal8');
            $table->string('goal9');
            $table->string('goal10');
            $table->string('goal11');
            $table->string('goal12');
            $table->string('start_date');
            $table->string('end_date');
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
