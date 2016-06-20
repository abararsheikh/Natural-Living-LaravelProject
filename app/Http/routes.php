<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/parks', 'ParkController@index');
Route::get('/planner','WeeklyPlanner\IndexController@index');
Route::get('bodyData','WeeklyPlanner\bodyDataController@index');
Route::get('/quotations','WeeklyPlanner\DailyQuoteController@index');
Route::post('/newBodyData','WeeklyPlanner\bodyDataController@store');
Route::post('/newBodyMeasureData','WeeklyPlanner\bodyDataController@storeMeasurements');

Route::get('/mealplanner','WeeklyPlanner\mealController@index');
