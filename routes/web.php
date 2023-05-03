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

Route::get('/comic', function () {

    $comics = config('db.comics');
    $cards = config('db.cards');
    $menu = config('db.menu');
    
    return view('comic', compact('comics', 'cards', 'menu'));
})->name('comic');
