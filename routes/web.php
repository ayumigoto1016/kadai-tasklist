<?php

Route::get('/', 'TasksController@index'); //トップページを一覧と同じページにルーティング

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

//Route::resource('tasks', 'TasksController');

Route::group(['middleware' => ['auth']], function () {

    Route::resource('tasks', 'TasksController');   //error箇所→対応済み
});