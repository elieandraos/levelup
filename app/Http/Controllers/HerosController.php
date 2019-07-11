<?php

namespace App\Http\Controllers;

use App\Models\Hero;

class HerosController extends Controller
{
    public function index()
    {
        $heroes = Hero::orderBy('name', 'ASC')->get();
        return view('heroes.index', ['heroes' => $heroes]);
    }
}
