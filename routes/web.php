<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/todo', 'HomeController@addTodo');
Route::get('todo/delete/{id}', 'HomeController@deleteTodo')->middleware('auth');
Route::get('todo/update/{id}', 'HomeController@viewUpdateTodo')->middleware('auth');
Route::post('todo/update/{id}', 'HomeController@updateTodo')->middleware('auth');
Route::get('/2', "UjianController@viewPersistance")->middleware('auth');
Route::post('/2', "UjianController@persistance")->middleware('auth');
Route::get('/3', "UjianController@viewChocolate")->middleware('auth');
Route::post('/3', "UjianController@breakChocolate")->middleware('auth');



