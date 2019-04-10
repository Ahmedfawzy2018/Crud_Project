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

Route::get('blogs.index' , function(){
	return view('blogs.index') ;
});
Route::get('processes.select' , function(){
	return view('processes.select') ;
});

Route::get('processes.select' , 'CreateController@home') ;
Route::post('processes.create' , 'CreateController@insert') ;

Route::post('blogs.index' , function(){
	return view('blogs.index') ;
});

Route::get('processes.update/{id}' , 'CreateController@update') ;
Route::post('processes.edit/{id}' , 'CreateController@edit') ;
Route::get('processes.delete/{id}' , 'CreateController@delete') ;
