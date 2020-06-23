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

Route::get('/', function () {return view('welcome');});




Route::group(['middleware' => 'admin' ], function() {

    Route::resource('/decision', 'DecisionController');

});


Route::group(['middleware' => 'auth'], function() {

    Route::resource('/employee', 'EmployeeController');
    Route::resource('/employerOther', 'EmployerOtherController');
    Route::resource('/employer', 'EmployerController');
    Route::resource('/jobTitle', 'JobTitleController');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/noAdmin', 'HomeController@noAdmin');

});


  Auth::routes();
