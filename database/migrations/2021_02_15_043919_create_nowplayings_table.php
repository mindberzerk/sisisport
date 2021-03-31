<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNowplayingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nowplayings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('GameId');
            $table->string('team_a');
            $table->string('team_b');
            $table->string('odds');
            /*$table->json('odds');*/
            $table->string('league');
            $table->string('tournament');
            $table->string('country');
            $table->string('date');
            $table->string('time');
            /*$table->datetime('datetime');*/
            /*datetime*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nowplayings');
    }
}
