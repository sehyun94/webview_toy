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

<<<<<<< Updated upstream
Route::get('/', function () {
    return view('welcome');
});

Route::post("/test",'TestController@index');



=======
Route::get('/','MainController@index')->name("main.page");
Route::post('/','MainController@index')->name("main.page");
Route::post('/identity-check', 'MainController@certification')->name("identity.check");
>>>>>>> Stashed changes
