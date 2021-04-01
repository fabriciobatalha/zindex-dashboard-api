<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('login', 'Api\\Auth\\LoginController@formLogin');
Route::post('fazer-login', 'Api\\Auth\\LoginController@login');

Route::group(['middleware' => ['apiJwt']], function() {
    Route::post('logout', 'Api\\Auth\\LoginController@logout');
    Route::get('produto', 'Api\\ProductController@index');
});
