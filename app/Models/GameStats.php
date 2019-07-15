<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameStats extends Model
{
    protected $table = 'game_stats';

    protected $fillable = [
        'kills',
        'deaths',
        'assists',
        'kda',
        'is_winner',
        'hero_id',
        'player_id',
        'lan_id',
    ];
}
