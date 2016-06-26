<?php
use Illuminate\Database\Eloquent\Model;
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

//Meal Planner Get Code
Route::get('/mealplanner','WeeklyPlanner\mealController@index');
Route::get('/mealplanner/{day}','WeeklyPlanner\mealController@indexWithDay');

//Meal Planner Post Validating and saving in database
Route::post('/breakfastAdd','WeeklyPlanner\mealController@store');
Route::post('/breakfastAdd/{day}','WeeklyPlanner\mealController@storeBreakfastWithDay');
/**
 * Delete meal food
 */
Route::delete('/deleteMealFood/{meal}', function (App\mealPlannerModel $meal) {
    // dd($meal);
    //App\mealPlannerModel::destroy($meal);
    $meal->delete();
    return redirect('/mealplanner');
});
Route::delete('/deleteMealFoodDay/{meal}/{day}', function (App\mealPlannerModel $meal, $day) {
    $meal->delete();
    return redirect('/mealplanner/'.$day);
});


Route::post('/doneMealFood/{meal}','WeeklyPlanner\mealController@donestatus');
Route::post('/doneMealFoodDay/{meal}/{day}','WeeklyPlanner\mealController@donestatusDay');
Route::post('/undoMealFood/{meal}','WeeklyPlanner\mealController@undostatus');
Route::post('/undoMealFoodDay/{meal}/{day}','WeeklyPlanner\mealController@undostatusDay');

//Add Lunch
Route::post('/lunchAdd','WeeklyPlanner\mealController@storeLunch');
Route::post('/lunchAdd/{day}','WeeklyPlanner\mealController@storeLunchDay');
Route::post('/dinnerAdd','WeeklyPlanner\mealController@storeDinner');
Route::post('/dinnerAdd/{day}','WeeklyPlanner\mealController@storeDinnerDay');


