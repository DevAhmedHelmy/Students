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

Route::get('/','HomeController@index');
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


// Outlay Route
Route::get('/outlay', 'OutlayController@index');
Route::get('/outlay/create', 'OutlayController@create');
Route::post('/outlay', 'OutlayController@store');
Route::get('/outlay/{id}','OutlayController@show');
Route::get('/outlay/edit/{id}','OutlayController@edit');
Route::post('/outlay/update/{id}','OutlayController@update');
Route::get('/outlay/delete/{id}','OutlayController@destroy');


// Subjects Route
Route::get('/subjects', 'SubjectController@index');
Route::get('/subjects/create', 'SubjectController@create');
Route::post('/subjects', 'SubjectController@store');
Route::get('/subjects/{id}','SubjectController@show');
Route::get('/subjects/edit/{id}','SubjectController@edit');
Route::post('/subjects/update/{id}','SubjectController@update');
Route::get('/subjects/delete/{id}','SubjectController@destroy');


// Lectures Route
Route::get('/lectures', 'LectureController@index');
Route::get('/lectures/create', 'LectureController@create');
Route::post('/lectures', 'LectureController@store');
Route::get('/lectures/{id}','LectureController@show');
Route::get('/lectures/edit/{id}','LectureController@edit');
Route::post('/lectures/update/{id}','LectureController@update');
Route::get('/lectures/delete/{id}','LectureController@destroy');