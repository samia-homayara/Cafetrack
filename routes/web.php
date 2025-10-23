<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/food-items', 'food_items');
Route::view('/board-games', 'board_games');