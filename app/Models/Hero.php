<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'heros';

    protected $fillable = [
        'name',
        'avatar',
    ];
}
