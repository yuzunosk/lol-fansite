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
// チャンピオン追加ページ
Route::get('/chanpions/new', 'ChanpionsController@newChanpion')->name('chanpions.new');
Route::post('/chanpions', 'ChanpionsController@createChanpion')->name('chanpions.create');
Route::get('/chanpions', 'ChanpionsController@indexChanpion')->name('chanpions.create');
Route::get('/chanpions/{id}/edit', 'ChanpionsController@editChanpion')->name('chanpions.edit');
Route::post('/chanpions/{id}', 'ChanpionsController@updateChanpion')->name('chanpions.update');
Route::post('/chanpions/{id}/delete', 'ChanpionsController@deleteChanpion')->name('chanpions.delete');

// スキル追加ページ
Route::get('/skills/new', 'ChanpionsController@newSkill')->name('skills.new');
Route::post('/skills', 'ChanpionsController@createSkill')->name('skills.create');
Route::get('/skills', 'ChanpionsController@indexSkill')->name('skills.create');
Route::get('/skills/{id}/edit', 'ChanpionsController@editSkill')->name('skills.edit');
Route::post('/skills/{id}', 'ChanpionsController@updateSkill')->name('skills.update');
Route::post('/skills/{id}/delete', 'ChanpionsController@deleteSkill')->name('skills.delete');

//ロール追加ページ
Route::get('/rolls/new', 'ChanpionsController@newRoll')->name('rolls.new');


Auth::routes();



