<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoublesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doubles', function (Blueprint $table) {
            $table->increments('BetId');

            $table->string('Team_1');
            $table->string('Team_2');
            $table->string('Team_3');
            $table->string('Team_4');

            $table->integer('GameId 1');
            $table->integer('GameId 2');
            $table->string('Date');
            $table->string('Time');
            $table->string('Odds');
            $table->string('betType');
            $table->integer('Amount');
            $table->integer('Potential_Return');

            $table->integer('userID');
            $table->integer('matchID');
            $table->string('Status');


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
        Schema::dropIfExists('doubles');
    }
}
