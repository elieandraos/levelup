<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Lan;
use App\Models\Team;
use App\Models\Player;
use Illuminate\Http\Request;

class LansController extends Controller
{
    public function index()
    {
    	$lans = Lan::with('teams')->whereHas('teams')->orderBy('started_at', 'DESC')->get();
    	return view('lans.index', ['lans' => $lans]);

    }

    public function store(Request $request)
    {
    	// create the lan
    	$lan = Lan::create([
    		'started_at' => Carbon::parse($request->started_at)->format('Y-m-d')
    	]);

    	// create team one
    	$teamOne = Team::create([
    		'name' => $request->team_one_name,
    		'lan_id' => $lan->id
    	]);

    	// create team two
    	$teamTwo = Team::create([
    		'name' => $request->team_two_name,
    		'lan_id' => $lan->id
    	]);

    	// save team one players
    	$teamOnePlayers = [];
    	foreach($request->team_one_gamers as $id) {
    		$teamOnePlayers[] = new Player(['gamer_id' => $id]);
    	}
    	$teamOne->players()->saveMany($teamOnePlayers);

    	// save team two players
    	$teamTwoPlayers = [];
    	foreach($request->team_two_gamers as $id) {
    		$teamTwoPlayers[] = new Player(['gamer_id' => $id]);
    	}
    	$teamTwo->players()->saveMany($teamTwoPlayers);

    	return response()->json(['lan_id' => $lan->id]);
    }
}
