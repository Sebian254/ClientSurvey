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

// Route::get('/', function () {
//     return view('welcome');
   Route::get('/SurveyForm', 'CustomerSurveyController@index');
   Route::get('/Success', 'CustomerSurveyController@saveData');
   // Route::get('/Dashboard', 'CustomerSurveyController@dashboard');
   // Route::get('/layout', 'CustomerSurveyController@layout');
   // Route::get('/Success', 'CustomerSurveyController@success');


