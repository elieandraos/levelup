<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_stats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kills');
            $table->integer('deaths');
            $table->integer('assists');
            $table->integer('kda');
            $table->boolean('is_winner');

            $table->bigInteger('hero_id')->unsigned()->nullable();
            $table->foreign('hero_id')->references('id')->on('heros')->onDelete('cascade');

            $table->bigInteger('player_id')->unsigned()->nullable();
            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');

            $table->bigInteger('game_id')->unsigned()->nullable();
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');

            $table->bigInteger('lan_id')->unsigned()->nullable();
            $table->foreign('lan_id')->references('id')->on('lans')->onDelete('cascade');

            
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
        Schema::dropIfExists('game_stats');
    }
}
