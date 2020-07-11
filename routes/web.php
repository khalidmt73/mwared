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




Route::group(['middleware' => 'admin'], function () {
    Route::resource('/decision', 'DecisionController');
});


Route::group(['middleware' => 'auth'], function () {

    Route::resource('/secondment', 'SecondmentController');
    Route::get('/secondment.add', 'SecondmentController@add')->name('secondment.add');
    Route::POST('/secondmentForm', 'SecondmentController@secondment')->name('secondmentForm');
    Route::get('/secondment.search', 'SecondmentController@search')->name('secondment.search');
    Route::POST('/secondment.result', 'SecondmentController@result')->name('secondment.result');
    Route::POST('/secondment.result', 'SecondmentController@result')->name('secondment.result');
    Route::POST('/secondment.view{id}', 'SecondmentController@view')->name('secondment.view');
    Route::GET('/secondment.word{id}', 'SecondmentController@word')->name('secondment.word');

    Route::resource('/employee', 'EmployeeController');
    Route::resource('/employerOther', 'EmployerOtherController');
    Route::resource('/employer', 'EmployerController');
    Route::resource('/jobTitle', 'JobTitleController');
    Route::get('/home', 'HomeController@index');
    Route::get('/noAdmin', 'HomeController@noAdmin');
    Route::get('/', function () {
        return view('welcome');
    });
});


Auth::routes();
