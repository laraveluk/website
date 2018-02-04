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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

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
