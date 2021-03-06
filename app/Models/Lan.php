<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lan extends Model
{
    protected $table = 'lans';
    protected $appends = [ 'title', 'human_date' ];

    protected $fillable = [
        'started_at',
    ];

    public function teams(): HasMany
    {
        return $this->hasMany(Team::class);
    }

    public function getTitleAttribute()
    {
    	return strtoupper($this->teams[0]->name).' vs '.strtoupper($this->teams[1]->name);
    }

    public function getHumanDateAttribute()
    {
    	return Carbon::parse($this->started_at)->format('d-M-Y');
    }

    public function getTeamOneAttribute()
    {
        return $this->teams[0];
    }

    public function getTeamTwoAttribute()
    {
        return $this->teams[1];
    }

    public function getTeamOneScoreAttribute()
    {
        return $this->teamOne->teamOneGames()->where('winner_team_id', '=', $this->teamOne->id)->count();
    }

    public function getTeamTwoScoreAttribute()
    {
        return $this->teamTwo->teamTwoGames()->where('winner_team_id', '=', $this->teamTwo->id)->count();
    }
}
