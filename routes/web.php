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
Route::get('/admin/employees', 'Admin\EmployeesController@index')->name('admin.employees');
Route::post('/admin/employees/import', 'Admin\EmployeesController@import')->name('admin.employees.import');


