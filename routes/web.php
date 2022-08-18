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


//home
Route::get('/', function () {
    return view('home');
})->name('home');

//dischi
Route::get('/discs', function () {

    $discs = config('discs');

    return view('discs', compact('discs'));
})->name('discs');

//disco
Route::get('/discs/{id}', function ($id) {
    $discs = config('discs');
    $disc = $discs[$id];


    return view('disc', compact('disc'));
})->name('disc');
