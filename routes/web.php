<?php


Route::get('/', 'PagesController@homePage')->name('home');
Route::get('/laravel-people', 'PagesController@laravelPeople')->name('laravelpeeps');
Route::get('/members', 'MemberDashboardController@dashboard')->name('dashboard');

Auth::routes();

