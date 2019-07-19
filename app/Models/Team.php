<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    protected $table = 'teams';

    protected $fillable = [
        'name',
        'lan_id',
    ];

    public function players(): HasMany
    {
        return $this->hasMany(Player::class);
    }

    public function lan(): BelongsTo
    {
        return $this->belongsTo(Lan::class);
    }

    public function teamOneGames(): HasMany
    {
        return $this->hasMany(Game::class, 'team_one_id', 'id');
    }

    public function teamTwoGames(): HasMany
    {
        return $this->hasMany(Game::class, 'team_two_id', 'id');
    }
}
