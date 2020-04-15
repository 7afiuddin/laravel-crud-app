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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('students', 'StudentController@index')->name('student.index');

Route::get('students/create', 'StudentController@create')->name('student.create');

Route::post('students/store', 'StudentController@store')->name('student.store');
Route::get('students/edit/{id}', 'StudentController@edit')->name('student.edit');
Route::post('students/update/{id}', 'StudentController@update')->name('student.update');
Route::get('students/destroy/{id}', 'StudentController@destroy')->name('student.destroy');
