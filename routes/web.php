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

//ROUTE TASKS
Route::get('/tasks','TaskController@index');

//ROUTE CREATE
Route::get('/tasks/create','TaskController@create')->name('tasks.create');

//ROUTE STORE
Route::post('/tasks/store','TaskController@store')->name('tasks.store');

//ROUTE EDIT
Route::get('/tasks/edit/{id}','TaskController@edit')->name('tasks.edit');

//ROUTE UPDATE
Route::post('/tasks/update/{id}','TaskController@update')->name('tasks.update');

//ROUTE DELETE
Route::get('/tasks/destroy/{id}','TaskController@destroy')->name('tasks.destroy');


