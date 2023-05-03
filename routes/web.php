<?php

use Illuminate\Support\Facades\Route;

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

    $comics = config('db.comics');
    $cards = config('db.cards');
    $menu = config('db.menu');
    
    return view('home', compact('comics', 'cards', 'menu'));
})->name('home');

Route::get('/comic/{index}', function ($index) {

    //Check index truthiness
    abort_if(count(config('db.comics')) - 1 < $index, 404);
    
    $comics = config('db.comics')[$index];
    $cards = config('db.cards');
    $menu = config('db.menu');
    
    return view('comic', compact('comics', 'cards', 'menu'));
})->name('comic');
