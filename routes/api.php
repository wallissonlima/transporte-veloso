<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
            Route::GET('/contratos', 'App\Http\Controllers\ContratosController@index');

            Route::GET('/contratos/{id}', 'App\Http\Controllers\ContratosController@show');

            Route::POST('/contratos', 'App\Http\Controllers\ContratosController@create');

            Route::DELETE('/contratos/{id}', 'App\Http\Controllers\ContratosController@destroy');

            Route::PUT('/contratos/{id}', 'App\Http\Controllers\ContratosController@update');


            
            Route::GET('/estoque', 'App\Http\Controllers\EstoqueController@index');

            Route::GET('/estoque/{id}', 'App\Http\Controllers\EstoqueController@show');

            Route::POST('/estoque', 'App\Http\Controllers\EstoqueController@create');

            Route::DELETE('/estoque/{id}', 'App\Http\Controllers\EstoqueController@destroy');

            Route::PUT('/estoque/{id}', 'App\Http\Controllers\EstoqueController@update');


            Route::GET('/tabelas', 'App\Http\Controllers\TabelasController@index');

            Route::GET('/tabelas/{id}', 'App\Http\Controllers\TabelasController@show');

            Route::POST('/tabelas', 'App\Http\Controllers\TabelasController@create');

            Route::DELETE('/tabelas/{id}', 'App\Http\Controllers\TabelasController@destroy');

            Route::PUT('/tabelas/{id}', 'App\Http\Controllers\TabelasController@update');


            



