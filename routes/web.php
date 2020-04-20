<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/archives', function () {
    return view('archives');
});

Route::get('/archives/{category}/', function ($category) {
    return $category. 'の一覧';
});

Route::post('/join', function () {
    return '入会申し込み完了';
});

Route::get('/join', function () {
    return redirect()->to('/');
});

Route::get('/id', function ($id) {
    return $id .'のページ';
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});
