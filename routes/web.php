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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    dd(app('Illuminate\Contracts\Config\Repository'));
//    dd(\Illuminate\Support\Facades\Config::get('database.default'));
});

Route::get('/test','TestController@test');

Route:

