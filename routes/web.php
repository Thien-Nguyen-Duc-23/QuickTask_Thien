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

Route::get('index',[
    'as'=>'getIndex',
    'uses'=>'QuickTasks@getIndex'
]);

Route::post('addTask',[
    'as'=>'postTask',
    'uses'=>'QuickTasks@postTask'
]);

Route::delete('deleteTask/{id}',[
    'as'=>'getDeleteTask',
    'uses'=>'QuickTasks@getDeleteTask'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
