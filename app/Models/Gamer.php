<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gamer extends Model
{
    protected $table = 'gamers';

    protected $fillable = [
        'name',
        'nickname',
        'avatar',
        'steam_id',
    ];
}
