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
    return view('welcome');
});

Route::get('/chanpions/new', 'ChanpionsController@newChanpion')->name('chanpions.new');
Route::post('/chanpions', 'ChanpionsController@createChanpion')->name('chanpions.create');
Route::get('/chanpions', 'ChanpionsController@indexChanpion')->name('chanpions.create');
Route::get('/chanpions/{id}/edit', 'ChanpionsController@editChanpion')->name('Chanpions.edit');
Route::post('/chanpions/{id}', 'ChanpionsController@updateChanpion')->name('Chanpions.update');




Auth::routes();



