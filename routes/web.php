<?php

Route::get('/', 'TasksController@index'); //トップページを一覧と同じページにルーティング


Route::resource('tasks', 'TasksController');
