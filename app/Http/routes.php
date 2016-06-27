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
Route::get('/parks', 'parkController@index');

//Weekly Planner Routes
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

Route::get('/mealplanner','WeeklyPlanner\mealController@index');
Route::get('/chart', 'WeeklyPlanner\chartController@displayChart');
Route::get('/chartCalculations', 'WeeklyPlanner\chartController@chartCalculations');
Route::get('/chartTotalRows/{day}', 'WeeklyPlanner\chartController@chartTotalCalculation');
Route::get('/ChartRowsDone/{day}', 'WeeklyPlanner\chartController@chartDoneCalculation');

//recipes blogs routes
Route::group(['middleware' => 'web'], function () {


    Route::get('/home', 'HomeController@index');
    
    Route::get('/recipe', ['as'=>'recipe.index','uses'=>'RecipeController@index']);

    Route::group(['middleware' => 'auth'], function () {


        Route::get('/user/{id}/edit',['as'=>'user.edit','uses'=>'UserController@edit']);
        Route::put('/user/{id}',['as'=>'user.update','uses'=>'UserController@update']);
        Route::get('/user/{id}',['as'=>'user.show','uses'=>'UserController@show']);



        Route::get('/recipe/create', ['as'=>'recipe.create','uses'=>'RecipeController@create']);
        Route::post('/recipe',['as'=>'recipe.store','uses'=> 'RecipeController@store']);
        Route::get('/recipe/{id}/edit',['as'=>'recipe.edit','uses'=>'RecipeController@edit']);
        Route::put('/recipe/{id}',['as'=>'recipe.update','uses'=>'RecipeController@update']);
        Route::delete('/recipe/{id}',['as'=>'recipe.destroy','uses'=>'RecipeController@destroy']);



        Route::group(['middleware' => 'admin'], function(){


            Route::get('/admin',['as'=>'admin.index','uses'=>'AdminController@index']);
            Route::get('/admin/recipe',['as'=>'admin.recipe','uses'=>'AdminController@recipe']);
            Route::get('/admin/ingredient',['as'=>'admin.ingredient','uses'=>'AdminController@ingredient']);
            Route::get('/admin/user',['as'=>'admin.user','uses'=>'AdminController@user']);
            Route::get('/admin/category' ,['as'=>'admin.category','uses'=>'AdminController@category']);



            Route::get('/admin/ingredient/{id}/edit',['as'=>'ingredient.edit','uses'=>'AdminController@ingredientEdit']);
            Route::put('/admin/ingredient/{id}',['as'=>'ingredient.update','uses'=>'AdminController@ingredientUpdate']);
            Route::delete('/admin/ingredient/{id}',['as'=>'ingredient.destroy','uses'=>'AdminController@ingredientDestroy']);
            Route::post('/admin/ingredient', ['as'=>'ingredient.store' , 'uses'=>'AdminController@ingredientStore']);


            Route::post('admin/cateogry' ,['as'=>'category.store','uses'=>'AdminController@categoryStore']);
            Route::get('admin/cateogry/{id}/edit' ,['as'=>'category.edit','uses'=>'AdminController@categoryEdit']);
            Route::put('admin/category/{id}' ,['as'=>'category.update','uses'=>'AdminController@categoryUpdate']);
            Route::delete('admin/category/{id}' ,['as'=>'category.destroy','uses'=>'AdminController@categoryDestroy']);


            Route::get('/admin/setting' ,['as'=>'admin.setting','uses'=>'AdminController@setting']);
            Route::put('/admin/setting' ,['as'=>'setting.update' ,'uses'=>'AdminController@settingUpdate']);

        });


    });

    Route::get('/recipe/{id}',['as'=>'recipe.show','uses'=>'RecipeController@show']);
    Route::get('/search/title',['as'=>'search.title','uses'=>'SearchController@searchTitle']);
    Route::get('/search/ingredient',['as'=>'search.ingredient','uses'=>'SearchController@searchIngredient']);

});




