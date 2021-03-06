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

Route::get('/', function () { return view('index'); }) -> name('index');


// EMPLOYEES
Route::get('/employees', 'EmployeeController@index') -> name('emp-index');
Route::get('/employees/{id}', 'EmployeeController@show') -> name('emp-show');
Route::post('/employees/update/{id}', 'EmployeeController@save') -> name('emp-save');
Route::get('/employees/delete/{id}', 'EmployeeController@destroy') -> name('emp-destroy');


// LOCATIONS
Route::get('/locations', 'LocationController@index') -> name('loc-index');
Route::get('/locations/{id}', 'LocationController@show') -> name('loc-show');
Route::post('/locations/update/{id}', 'LocationController@save') -> name('loc-save');


// TASKS
Route::get('/tasks', 'TaskController@index') -> name('task-index');
Route::get('/tasks/{id}', 'TaskController@show') -> name('task-show');
Route::post('/tasks/update/{id}', 'TaskController@save') -> name('task-save');
