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
//マイページ

use Illuminate\Routing\RouteGroup;
//メール認証
// Route::middleware('verified')->group(function () {
// Route::group(['middleware' => 'auth:user'], function () {
//ログイン認証
// Route::group(['middleware' => 'auth'], function () {
//マイページ
Route::get('/mypage', 'MypageController@indexMypage')->name('mypage.index');
Route::get('/mypage/profile', 'MypageController@showProfile')->name('mypage.profile');
Route::post('/mypage/{id}', 'MypageController@updateProfile')->name('mypage.update');

// チャンピオン追加ページ
Route::get('/chanpions/new', 'ChanpionsController@newChanpion')->name('chanpions.new');
Route::post('/chanpions', 'ChanpionsController@createChanpion')->name('chanpions.create');
//チャンピオン系管理画面表示
Route::get('/chanpions', 'ChanpionsController@indexChanpion')->name('chanpions.create');
Route::get('/chanpions/{id}/edit', 'ChanpionsController@editChanpion')->name('chanpions.edit');
Route::post('/chanpions/{id}', 'ChanpionsController@updateChanpion')->name('chanpions.update');
Route::post('/chanpions/{id}/delete', 'ChanpionsController@deleteChanpion')->name('chanpions.delete');
//チャンピオン管理画面ソート機能
Route::get('/chanpions/sort', 'DataSortController@sort')->name('chanpions.sort');

// スキル追加ページ
Route::get('/skills/new/', 'ChanpionsController@newSkill')->name('skills.new');
Route::post('/skills', 'ChanpionsController@createSkill')->name('skills.create');
Route::get('/chanpions', 'ChanpionsController@indexChanpion')->name('skills.create');
Route::get('/skills/{id}', 'ChanpionsController@listSkill')->name('skills.index');
Route::get('/skills/{id}/edit', 'ChanpionsController@editSkill')->name('skills.edit');
Route::post('/skills/{id}', 'ChanpionsController@updateSkill')->name('skills.update');
Route::post('/skills/{id}/delete', 'ChanpionsController@deleteSkill')->name('skills.delete');

//ロール追加ページ
Route::get('/rolls/new', 'ChanpionsController@newRoll')->name('rolls.new');
Route::post('/rolls', 'ChanpionsController@createRoll')->name('rolls.create');
Route::get('/rolls', 'ChanpionsController@indexRoll')->name('rolls.create');
Route::get('/rolls/{id}/edit', 'ChanpionsController@editRoll')->name('rolls.edit');
Route::post('/rolls/{id}', 'ChanpionsController@updateRoll')->name('rolls.update');
Route::post('/rolls/{id}/delete', 'ChanpionsController@deleteRoll')->name('rolls.delete');

//タグ追加ページ
Route::get('/tags/new', 'ChanpionsController@newTag')->name('tags.new');
Route::post('/tags', 'ChanpionsController@createTag')->name('tags.create');
Route::get('/tags', 'ChanpionsController@indexTag')->name('tags.create');
Route::get('/tags/{id}/edit', 'ChanpionsController@editTag')->name('tags.edit');
Route::post('/tags/{id}', 'ChanpionsController@updateTag')->name('tags.update');
Route::post('/tags/{id}/delete', 'ChanpionsController@deleteTag')->name('tags.delete');

//タグボックス
Route::get('/tagbox/{id}/new', 'ChanpionsController@newTagBox')->name('tagbox.new');
Route::post('/tagbox', 'ChanpionsController@createTagBox')->name('tagbox.create');
Route::get('/chanpions', 'ChanpionsController@indexChanpion')->name('tagbox.create');
Route::get('/tagbox/{id}/edit', 'ChanpionsController@editTagBox')->name('tagbox.edit');
Route::post('/tagbox/{id}', 'ChanpionsController@updateTagBox')->name('tagbox.update');


//コンテンツ追加ページ
Route::get('/articles/new', 'ArticlesController@newArticles')->name('articles.new');
Route::post('/articles', 'ArticlesController@createArticles')->name('articles.create');
Route::get('/articles', 'ArticlesController@indexArticles')->name('articles.create');
Route::get('/articles/{id}/edit', 'ArticlesController@editArticles')->name('articles.edit');
Route::post('/articles/{id}', 'ArticlesController@updateArticles')->name('articles.update');
Route::post('/articles/{id}/delete', 'ArticlesController@deleteArticles')->name('articles.delete');

//カテゴリー追加ページ
Route::get('/categorys/new', 'ArticlesController@newCategory')->name('categorys.new');
Route::post('/categorys/new', 'ArticlesController@createCategory')->name('categorys.create');
Route::get('/categorys/{id}/delete', 'ArticlesController@deleteCategory')->name('categorys.delete');

//Ajax
// Route::post('ajaxtest', 'DataSortController@test')->name('ajax.sort');
Route::post('/sort', 'DataSortController@sort')->name('ajax.sort');
// });
//Email認証
// });

//E-mailアドレス変更
// Route::GET('/email/verify', 'ForgotPasswordController@show')->name('e-mail.change');
//パスワードリセット
Route::get('/passreset', 'PassResetControler@showView')->name('mypage.passreset');

// お問い合わせ
Route::get('contact', 'ContactController@input'); // 入力ページ
Route::post('contact/send', 'ContactController@send')->name('contact.send'); //送信ページ
Route::post('contact/process', 'ContactController@process')->name('contact.send'); //送信ページ





//home画面表示
Route::get('/home{any}', 'HomeController@showHome')->where('any', '.*')->name('Home.show');




//通常ログイン関連
// Auth::routes();
//Email認証
Auth::routes(['verify' => true]);
