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

// § Rotta per la pagina index di 'trains'
Route::get('/', 'TrainController@index')->name('all-trains');

Route::get('/day', 'TrainController@currentDay')->name('day-trains');
