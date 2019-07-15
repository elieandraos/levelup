<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    protected $table = 'games';

    protected $fillable = [
        'team_one_score',
        'team_two_score',
        'team_one_id',
        'team_two_id',
        'winner_team_id',
    ];

    public function stats(): HasMany 
    {
        return $this->hasMany(GameStats::class);
    }
    public function teamOne(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_one_id', 'id');
    }

    public function teamTwo(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_two_id', 'id');
    }

    public function winnerTeam(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'winner_team_id', 'id');
    }
}
