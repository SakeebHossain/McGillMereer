<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReflectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reflections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('event_id');
            $table->string('date');
            $table->string('body');
            $table->string("enjoyment_score");
            $table->string("goal1_score");
            $table->string("goal2_score");
            $table->string("goal3_score");
            $table->string("goal4_score");
            $table->string("goal5_score");
            $table->string("goal6_score");
            $table->string("goal7_score");
            $table->string("goal8_score");
            $table->string("goal9_score");
            $table->string("goal10_score");
            $table->string("goal11_score");
            $table->string("goal12_score");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reflections');
    }
}
