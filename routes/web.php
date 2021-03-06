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

//Route::get('/', function () { return view('welcome');});
Route::get('table', 'TableController@index');

Route::get('/', 'TableTariffsController@index');
Route::get('tariffs', 'TableTariffsController@index');
Route::get('new', 'TableTariffsController@new');
Route::get('ins', 'TableTariffsController@ins');

