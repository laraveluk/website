<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Note we're inside the App\Http\Controllers\Ajax namespace
|
*/

// Deploy route
Route::post('deploy', 'UtilController@deploy')->name('deploy');

Route::get('blog/posts', ['as' => 'frontend.posts', 'uses' => 'Frontend\PostsController@getPosts']);

Route::middleware(['web', 'auth', 'api'])->group(function () {
    Route::get('blog/posts/{admin}', ['as' => 'frontend.posts', 'uses' => 'Frontend\PostsController@getPosts']);
    Route::post('blog/approve/post', ['as' => 'frontend.approve_posts', 'uses' => 'Frontend\PostsController@approvePost']);
    
    Route::resource('user', 'UserController', [
        'only' => [
            'index',
            'show',
            'update',
        ]
    ]);

    Route::resource('post', 'PostController', [
        'only' => [
            'index',
            'show',
            'store',
            'update',
            'destroy'
        ]
    ]);

	Route::resource('profile', 'ProfileController', [
		'only' => [
			'show',
			'update',
			'destroy'
		]
	]);

	Route::group(['prefix' => 'promotions'], function() {
        Route::post('/store', 'PromotionsController@store');
        Route::get('/get/{promotion}', 'PromotionsController@get');
        Route::put('/update/{promotion}', 'PromotionsController@update');
        Route::delete('/delete/{promotion}', 'PromotionsController@delete');
    });
});
