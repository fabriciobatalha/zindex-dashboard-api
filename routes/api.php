<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::post('auth/login', 'Api\\AuthController@login');

Route::group(['middleware' => ['apiJwt']], function() {
    Route::post('auth/logout', 'Api\\AuthController@logout');
    Route::get('produto', 'Api\\ProductController@index');
});
