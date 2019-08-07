<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'team_one_score' => $this->team_one_score,
            'team_two_score' => $this->team_two_score,
            'winner' => $this->winnerTeam->name
        ];
    }
}
