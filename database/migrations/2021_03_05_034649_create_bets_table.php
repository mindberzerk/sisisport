<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bets', function (Blueprint $table) {
            $table->increments('BetId');

            $table->string('Team_a');
            $table->string('Team_b');

            $table->integer('GameId');
            $table->string('Date');
            $table->string('Time');
            $table->string('Odds');
            $table->string('betType');
            $table->integer('Amount');
            $table->integer('Potential_Return');

            $table->integer('userID');
            $table->integer('matchID');
            $table->string('Status');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bets');
    }
}
