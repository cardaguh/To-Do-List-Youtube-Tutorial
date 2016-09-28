<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome', 'TaskController@index');
});*/

Route::get('/', 'TaskController@index');

Route::post('/createTask', [
	'uses' => 'TaskController@store',
	'as' => 'createTask',
]);

Route::get('/deleteTask/{task_id}', [
	'uses' => 'TaskController@destroy',
	'as' => 'deleteTask',
]);
