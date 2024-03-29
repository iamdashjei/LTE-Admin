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
    return view('login');
});

Auth::routes();

Route::get('/dashboard/home', 'DashboardController@versionone')->name('home');
Route::get('/dashboard/v2', 'DashboardController@versiontwo')->name('v2');
Route::get('/dashboard/v3', 'DashboardController@versionthree')->name('v3');
Route::get('/form/pcr', 'PatientController@index')->name('pcr');

// Route::get('form/add', function(){
// 	return view('add');
// });

Route::POST('form/insert', 'createcontroller@add')->name('pcr.insert');
Route::get('form/update/{id}', 'createcontroller@update')->name('pcr.update');
Route::get('form/edit/{id}', 'createcontroller@edit')->name('pcr.edit');
Route::get('form/read/{id}', 'createcontroller@read')->name('pcr.read');
Route::get('form/delete/{id}', 'createcontroller@delete')->name('pcr.delete');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
