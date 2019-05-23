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
// students Route
Route::get('/students','StudentsController@index');
Route::get('/students/create','StudentsController@create');
Route::post('/students','StudentsController@store');
Route::get('/students/{student}','StudentsController@show');
Route::get('/students/edit/{id}','StudentsController@edit');
Route::post('/students/update/{id}','StudentsController@update');
Route::get('/students/delete/{id}','StudentsController@destroy');

// Doctor Route
Route::get('/doctors','DoctorsController@index');
Route::get('/doctors/create','DoctorsController@create');
Route::post('/doctors','DoctorsController@store');
Route::get('/doctors/{doctor}','DoctorsController@show');
Route::get('/doctors/edit/{id}','DoctorsController@edit');
Route::post('/doctors/update/{id}','DoctorsController@update');
Route::get('/doctors/delete/{id}','DoctorsController@destroy');
