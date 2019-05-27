<?php

use Illuminate\Support\Facades\Redirect;

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

Route::group(['prefix' => 'admin', 'middleware'=>['auth', 'check_role']], function(){
Route::get('/', 'HomeAdmin@index');
/*
Route::get('/logout', function(){
    auth()->logout();
    return redirect('login');
});
*/
// compaines
Route::get('companies', 'CompaniesController@index');
Route::get('companies/create', 'CompaniesController@create');
Route::post('companies', 'CompaniesController@store');
Route::get('companies/{id}/edit', 'CompaniesController@edit');
Route::put('companies/{id}/update', 'CompaniesController@update');
Route::delete('companies/{id}', 'CompaniesController@destroy');
Route::get('companies/{id}/show', 'CompaniesController@show');
// Employees
Route::get('employees', 'EmployeesController@index');
Route::get('employees/create', 'EmployeesController@create');
Route::post('employees', 'EmployeesController@store');
Route::get('employees/{id}/edit', 'EmployeesController@edit');
Route::put('employees/{id}/update', 'EmployeesController@update');
Route::delete('employees/{id}', 'EmployeesController@destroy');
Route::get('employees/{id}/show', 'EmployeesController@show');
});


