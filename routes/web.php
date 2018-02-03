<?php

/** Page Routes */
Route::get('/', 'PagesController@homePage')->name('home');
Route::get('/laravel-people', 'PagesController@laravelPeople')->name('laravelpeeps');

/** Authentication Routes */
Auth::routes();
Route::get('login/slack', 'Auth\SlackLoginController@redirectToProvider');
Route::get('login/slack/callback', 'Auth\SlackLoginController@handleProviderCallback');

/** Blog Routes */
require base_path() . '/routes/blog.php';
