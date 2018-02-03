<?php
Route::prefix('blog')->group(function () {
    Route::get('create', 'PostController@create')->name('posts.create');
    Route::post('create', 'PostController@store')->name('posts.store');
    Route::get('{post}', 'PostController@show')->name('posts.show');
});
