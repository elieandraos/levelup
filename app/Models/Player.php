<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
    protected $table = 'players';

    protected $fillable = [
        'team_id',
        'gamer_id',
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function gamer(): BelongsTo
    {
        return $this->belongsTo(Gamer::class);
    }
}
