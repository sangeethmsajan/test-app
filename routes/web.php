<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Models\User;

Route::get('/test', function () {
    $user = User::first();

    activity()
        ->performedOn(null)
        ->log('User test on null object');

    return 'done';
});