<?php

Route::get('/', 'admin\AdminController@index')->name('index');

Route::group(['prefix' => 'app'], function () {
    Route::get('/', 'AppController@index')->name('indexApp');
    Route::get('/create', 'AppController@create')->name('createApp');
    Route::post('/store', 'AppController@store')->name('storeApp');
    Route::get('/edit/{id}', 'AppController@edit')->name('editApp');
    Route::post('/update', 'AppController@update')->name('updateApp');
    Route::get('/delete/{id}', 'AppController@delete')->name('deleteApp');
});

Route::group(['prefix' => 'category'], function () {
    Route::get('/', 'AppController@index')->name('indexCategory');
    Route::get('/create', 'CategoryController@create')->name('createCategory');
    Route::post('/store', 'CategoryController@store')->name('storeCategory');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('editCategory');
    Route::post('/update', 'CategoryController@update')->name('updateCategory');
    Route::get('/delete/{id}', 'CategoryController@delete')->name('deleteCategory');
});

Route::group(['prefix' => 'comment'], function () {
    Route::get('/', 'CommentController@index')->name('indexComment');
    Route::get('/create', 'CommentController@create')->name('createComment');
    Route::post('/store', 'CommentController@store')->name('storeComment');
    Route::get('/edit/{id}', 'CommentController@edit')->name('editComment');
    Route::post('/update', 'CommentController@update')->name('updateComment');
    Route::get('/delete/{id}', 'CommentController@delete')->name('deleteComment');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'UserController@index')->name('indexUser');
    Route::get('/create', 'UserController@create')->name('createUser');
    Route::post('/store', 'UserController@store')->name('storeUser');
    Route::get('/edit/{id}', 'UserController@edit')->name('editUser');
    Route::post('/update', 'UserController@update')->name('updateUser');
    Route::get('/delete/{id}', 'UserController@delete')->name('deleteUser');
});

Route::group(['prefix' => 'payment'], function () {
    Route::get('/', 'PaymentController@index')->name('indexPayment');
});
