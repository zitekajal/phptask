<?php

use Illuminate\Support\Facades\Route;

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

Route ::view('project','Index');
Route ::view('first','First');
Route ::view('edit','Edit');
Route ::get('list1','FirstController@list1');
Route ::get('edit/{id}','FirstController@edit');
//Route::get('data','FirstController@create');
//Route::get('dd','FirstController@db');
Route::post('submit','FirstController@save');
Route::post('edit','FirstController@update');