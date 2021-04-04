<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

Route::post('cadastrar-usuario', 'Api\\Auth\\RegisterController@cadastro');
Route::post('fazer-login', 'Api\\Auth\\LoginController@login');
Route::post('validar-token', 'Api\\Auth\\LoginController@validateToken');

Route::group(['middleware' => ['apiJwt']], function() {
    Route::post('logout', 'Api\\Auth\\LoginController@logout');
    Route::get('usuario-logado', 'Api\\Auth\\LoginController@usuarioLogado');
});
