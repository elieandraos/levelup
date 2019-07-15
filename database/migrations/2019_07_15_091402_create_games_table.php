<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('team_one_score');
            $table->integer('team_two_score');

            $table->bigInteger('team_one_id')->unsigned()->nullable();
            $table->foreign('team_one_id')->references('id')->on('teams')->onDelete('cascade');

            $table->bigInteger('team_two_id')->unsigned()->nullable();
            $table->foreign('team_two_id')->references('id')->on('teams')->onDelete('cascade');

            $table->bigInteger('winner_team_id')->unsigned()->nullable();
            $table->foreign('winner_team_id')->references('id')->on('teams')->onDelete('cascade');

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
        Schema::dropIfExists('games');
    }
}
