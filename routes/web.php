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



Route::get('/word/{id}', 'HomeController@generateDocx')->name('toWord');
Route::get('/', 'HomeController@welcome');
Route::get('/json', 'HomeController@data');
Route::get('/potenza', 'PotenzaController@show');
Route::get('/importar', 'HomeController@import');
Route::post('/importar', 'HomeController@importExcel');
