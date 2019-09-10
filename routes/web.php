<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "Essa aplicação é o primeiro teste do curso de laravel da turma de 09/09/2019 à 13/09/2019";
});

Route::get('/phpinfo', function () {
    phpinfo();
});

Route::get('/helloworld', "TesteController@index");

Route::get('/helloworld/{nome}/{idade?}', "TesteController@index2");
