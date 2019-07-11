<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lan extends Model
{
    protected $table = 'lans';

    protected $fillable = [
        'name',
        'started_at',
    ];

    public function teams(): HasMany
    {
        return $this->hasMany(Team::class);
    }
}
