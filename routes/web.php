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
// Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();


//ログアウト中のページ
Route::get('/login', 'Auth\LoginController@login');
Route::post('/login', 'Auth\LoginController@login');


//新規登録ページ
Route::get('/register', 'Auth\RegisterController@register');
Route::post('/register', 'Auth\RegisterController@register');


//登録完了ページ
Route::get('/added', 'Auth\RegisterController@added');
Route::post('/added', 'Auth\RegisterController@added');


//ログイン中でなければ表示できないページ
Route::middleware('auth')->group(function(){
    //ログイン中のページ
    Route::get('/top','PostsController@index');

    Route::get('/profile','UsersController@profile');

    Route::get('/search','UsersController@search');

    Route::get('/follow-list','PostsController@index');
    Route::get('/follower-list','PostsController@index');

    //相手ユーザーのプロフィールページ
});


// //ログアウト処理
Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/logout', 'Auth\LoginController@logout');
