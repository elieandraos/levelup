<?php

namespace App\Http\Controllers;

use App\Models\Gamer;

class GamersController extends Controller
{
    public function index()
    {
        $gamers = Gamer::orderBy('name', 'ASC')->get();
        return view('gamers.index', ['gamers' => $gamers]);
    }
}
