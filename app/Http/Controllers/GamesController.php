<?php

namespace App\Http\Controllers;

use App\Models\Lan;
use App\Models\Game;
use App\Models\Hero;
use App\Models\Team;
use App\Models\Player;
use App\Models\GameStats;
use Illuminate\Http\Request;
use App\Http\Requests\CreateGameRequest;

class GamesController extends Controller
{
	public function __construct(){
		$this->heros = Hero::orderBy('name', 'ASC')->pluck('name', 'id')->toArray();
	}
    
    public function create(Lan $lan)
    {
    	$teams = $lan->teams->pluck('name', 'id')->toArray();
    	
    	return view('games.create', [ 
    		'lan' => $lan, 
    		'teams' => $teams,
    		'heros' => $this->heros
    	]);
    }

    public function store(CreateGameRequest $request, Lan $lan) 
    {
    	$game = Game::create([
    		'team_one_id' => $lan->teams[0]->id,
    		'team_two_id' => $lan->teams[1]->id,
    		'team_one_score' => (int) $request->get('team_one_score'),
    		'team_two_score' => (int) $request->get('team_two_score'),
    		'winner_team_id' => $request->get('winner_team_id'),
    	]);

    	$stats = [];
    	foreach($request->player_id as $key => $playerId) {
            $player = Player::findOrFail($playerId);

    		$stats[] = new GameStats([
    			'kills' => $request->get('kills')[$key],
		        'deaths' => $request->get('deaths')[$key],
		        'assists' => $request->get('assists')[$key],
		        'kda' =>  ($request->get('kills')[$key] + $request->get('assists')[$key]) / $request->get('deaths')[$key],
		        'is_winner' => ($game->winner_team_id == $player->team_id) ? 1 : 0,
		        'hero_id' => $request->get('hero_id')[$key],
		        'player_id' => $playerId,
		        'lan_id' => $lan->id
    		]);
    	}

    	$game->stats()->saveMany($stats);

    	return redirect()->route('lans.index')->with('flash', 'Game was created successfully.');;
    }
}
