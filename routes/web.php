<?php

/** Page Routes */
Route::get('/', 'PagesController@homePage')->name('home');
Route::get('/about', 'PagesController@aboutUs')->name('about');
Route::get('/laravel-people', 'PagesController@laravelPeople')->name('laravelpeeps');

/** Slack Invitation Routes */
Route::get('/slack', 'Auth\SlackLoginController@showInviteForm');
Route::post('/slack', 'Auth\SlackLoginController@sendInvite');


/** Dashboard Routes **/
Route::get('/members', 'MemberDashboardController@dashboard')->name('dashboard');

/** Authentication Routes */
Auth::routes();
Route::get('login/slack', 'Auth\SlackLoginController@redirectToProvider')->name('login.slack');
Route::get('login/slack/callback', 'Auth\SlackLoginController@handleProviderCallback');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

/** Blog Routes */
Route::prefix('blog')->namespace('Blog')->group(function () {
    Route::get('/tag/{tag}', 'PostTagController@show')->name('frontend.posts.tags.show');
    Route::get('/{type?}', 'PostController@index')->name('frontend.posts.index');
    Route::get('/{type}/{post}', 'PostController@show')->name('frontend.posts.show');
    /** Comment Routes */
    Route::post('/{type}/{post}/comment', 'CommentController@store')->name('frontend.comments.store');
});

/** Profile Show Route */
Route::get('profiles/{id}', 'ProfileShowController')->name('profile');

/** Redirects*/
Route::redirect('tutorials', '/blog/tutorials');
