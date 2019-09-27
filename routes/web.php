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
//student insert code here....
Route::get('student','studentController@displayform');
Route::post('add_data','studentController@save');


//student view code here
Route::get('studentview', 'studentController@viewform');
Route::get('studentview', 'studentController@index');

//sudent edit and update code with id
Route::get('clickedit/{id}', 'studentController@edit');
Route::post('update/{id}', 'studentController@update_view');

//student delete code here
Route::get('clickdelete/{id}', 'studentController@delete_func');


Route::get('/', function () {
    return view('welcome');
});
Route::get('sayhello','Hellocontroller@index');
