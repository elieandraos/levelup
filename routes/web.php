<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('home', 'HomeController@index')->name('home');
    Route::resource('gamers', 'GamersController')->only(['index']);
    Route::resource('heroes', 'HerosController')->only(['index']);
    Route::resource('lans', 'LansController')->only(['index', 'store']);

    Route::get('lan/{lan}/games/create', 'GamesController@create')->name('games.create');
    Route::post('lan/{lan}/games/store', 'GamesController@store')->name('games.store');
    Route::get('lan/{lan}/games', 'GamesController@index')->name('lan.games');
});


