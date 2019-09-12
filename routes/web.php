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

Route::view('/welcome','welcome');
Route::redirect('/welcome2','/welcome');

Route::get('/about', function () {
    return "Essa aplicação é o primeiro teste do curso de laravel da turma de 09/09/2019 à 13/09/2019";
});

Route::get('/phpinfo', function () {
    phpinfo();
});

// 1ª maneira de chamar uma middleware
//Route::middleware('checkage')->group(function() {
    Route::get('/index1', "TesteController@index"); 
    Route::post('/index1', "TesteController@indexPost");    
    Route::get('/index2/{nome}/{idade?}', "TesteController@index2");
//});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
