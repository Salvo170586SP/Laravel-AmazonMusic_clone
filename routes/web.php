<?php

use App\Http\Controllers\DiscController;
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
Route::get('/discs', 'DiscController@index')->name('discs.index');

//disco
Route::get('/discs/{id}', 'DiscController@show')->name('discs.show');
