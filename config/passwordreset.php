<?php

return [
    /*
    |--------------------------------------------------------------------------
    | User model
    |--------------------------------------------------------------------------
    |
    | The location of the User model.
    |
    */
    'user_model' => App\Models\User::class,

    /*
    |--------------------------------------------------------------------------
    | Search field
    |--------------------------------------------------------------------------
    |
    | If no ID field is provided when the command is called the command will
    | prompt for a user. This is the field that should be used to search.
    |
    */
    'search_field' => 'name',

    /*
    |--------------------------------------------------------------------------
    | Password field
    |--------------------------------------------------------------------------
    |
    | This is the name of the password field that this command should reset.
    |
    */
    'password_field' => 'password',

];
