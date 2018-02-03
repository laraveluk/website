<?php


Route::get('/', 'PagesController@homePage')->name('home');
Route::get('/laravel-people', 'PagesController@laravelPeople')->name('laravelpeeps');
Auth::routes();

Route::get('/posts/create', 'PostController@create');
