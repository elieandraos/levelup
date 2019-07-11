<?php

namespace App\Http\Controllers;

use App\Models\Gamer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gamers = Gamer::orderBy('name', 'ASC')->get()->pluck('name', 'id')->toArray();
        return view('home', ['gamers' => $gamers]);
    }
}
