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
    return view('home');
});
Route::get('/partis', 'PartiController@index')->name('parti.index');
Route::get('/partis/{id}', 'PartiController@show')->name('parti.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
