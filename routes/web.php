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
    return view('auth.login');
});
Route::resource('home','HomeController');
Route::resource('role','RoleController');
Route::resource('user','userController');
Route::resource('job','JobController');
Route::resource('employee','EmployeeController');
Route::resource('patient','PatientController');
Route::resource('p_detail','PatientDetailController');
Route::resource('expend','ExpendController');
Route::resource('sicknees','SickneesController');
Route::resource('salary','SalaryController');
Route::get('detail/{id}','SalaryController@show_detail');
Route::resource('service_report','ServiceReportController');
Route::resource('setting','SettingController');

Route::get('tasks', function(){
	return App\Task::where('completed', 1)->pluck('body');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
