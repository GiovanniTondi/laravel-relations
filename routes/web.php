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

Route::get('/employees', 'EmployeeController@index') -> name('emp-index');
Route::get('/employees/{id}', 'EmployeeController@show') -> name('emp-show');

Route::post('/employees/update/{id}', 'EmployeeController@save') -> name('emp-save');
