<?php
Route::prefix('blog')->group(function () {
    Route::get('/', 'PostController@index')->name('posts.index');
    Route::get('create', 'PostController@create')->name('posts.create');
    Route::post('create', 'PostController@store')->name('posts.store');
    Route::get('{post}', 'PostController@show')->name('posts.show');
    Route::get('{post}/edit', 'PostController@edit')->name('posts.edit');
    Route::patch('{post}', 'PostController@update')->name('posts.update');
    Route::delete('{post}', 'PostController@destroy')->name('posts.destroy');
});
