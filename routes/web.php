<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::get('/horses', 'HorseController@index')->name('horses.index');
Route::get('/horses/create', 'HorseController@create')->name('horse.create');
Route::post('/horses', 'HorseController@store')->name('horse.store');
Route::get('/horses/{id}', 'HorseController@show')->name('horse.show');
Route::put('/horses/{id}', 'HorseController@update')->name('horse.update');
Route::delete('/horses/{id}', 'HorseController@destroy');

Route::get('/betters', 'BetterController@index')->name('betters.index');
Route::get('/betters/create', 'BetterController@create')->name('better.create');
Route::post('/betters', 'BetterController@store')->name('better.store');
Route::get('/betters/{id}', 'BetterController@show')->name('better.show');
Route::put('/betters/{id}', 'BetterController@update')->name('better.update');
Route::delete('/betters/{id}', 'BetterController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
