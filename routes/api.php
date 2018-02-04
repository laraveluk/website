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

Route::middleware(['web', 'auth'])->group(function() {

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

});
