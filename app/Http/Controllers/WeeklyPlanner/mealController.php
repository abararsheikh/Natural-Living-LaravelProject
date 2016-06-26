<?php

namespace App\Http\Controllers\WeeklyPlanner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use App\mealPlannerModel as mealPlannerModel;
use Illuminate\Support\Facades\Redirect;

class mealController extends Controller
{
    public function index()
    {
        date_default_timezone_set("America/Toronto");
        $today = date("D");

        $mealType = DB::table('mealplannertbl')
            ->Where('meal_Time', 'Breakfast')
            ->where('user_Id', Auth::id())
            ->where ('day_Selected', $today)
            ->orderBy('date_Created', 'desc')
            ->get();

        $mealTypeLunch = DB::table('mealplannertbl')
            ->Where('meal_Time', 'Lunch')
            ->where('user_Id', Auth::id())
            ->where ('day_Selected', $today)
            ->orderBy('date_Created', 'desc')
            ->get();

        $mealTypeDine = DB::table('mealplannertbl')
            ->Where('meal_Time', 'Dinner')
            ->where('user_Id', Auth::id())
            ->where ('day_Selected', $today)
            ->orderBy('date_Created', 'desc')
            ->get();

        return view('WeeklyPlanner.mealPlannerHome',['today'=>$today, 'mealType'=>$mealType, 'mealTypeLunch' => $mealTypeLunch, 'mealTypeDine' => $mealTypeDine]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'breakfastFoodName' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/mealplanner')
                ->withInput()
                ->withErrors($validator);
        }
        $today = date("D");
        // Create The Task...
        $uid = Auth::id();
        $meal = new mealPlannerModel;
        $meal->food_Wish = $request->breakfastFoodName;
        $meal->user_Id = $uid;
        $meal->meal_Time = 'Breakfast';
        $meal->food_Status = 'false';
        $meal->day_Selected = $today;
        $meal->save();

        return redirect('/mealplanner');

    }
    public function donestatus(Request $request,$mid)
    {

        DB::table('mealplannertbl')
            ->where('id', '=', $mid)
            ->update(array('food_Status' => true));

        return redirect('/mealplanner');

    }
    public function undostatus(Request $request,$mid)
    {

        DB::table('mealplannertbl')
            ->where('id', '=', $mid)
            ->update(array('food_Status' => false));

        return redirect('/mealplanner');

    }
    public function storeLunch(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lunchFoodName' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/mealplanner')
                ->withInput()
                ->withErrors($validator);
        }

        // Create The Task...
        $today = date("D");
        $uid = Auth::id();
        $meal = new mealPlannerModel;
        $meal->food_Wish = $request->lunchFoodName;
        $meal->user_Id = $uid;
        $meal->meal_Time = 'Lunch';
        $meal->food_Status = 'false';
        $meal->day_Selected = $today;
        $meal->save();

        return redirect('/mealplanner');

    }
    public function storeDinner(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'dinnerFoodName' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/mealplanner')
                ->withInput()
                ->withErrors($validator);
        }

        // Create The Task...
        $today = date("D");
        $uid = Auth::id();
        $meal = new mealPlannerModel;
        $meal->food_Wish = $request->dinnerFoodName;
        $meal->user_Id = $uid;
        $meal->meal_Time = 'Dinner';
        $meal->food_Status = 'false';
        $meal->day_Selected = $today;
        $meal->save();

        return redirect('/mealplanner');

    }
    public function indexWithDay(Request $request, $daySelected)
    {
        $today = date("D");
        $mealTypeDay = DB::table('mealplannertbl')
            ->Where('meal_Time', 'Breakfast')
            ->where('user_Id', Auth::id())
            ->where ('day_Selected', $daySelected)
            ->orderBy('date_Created', 'desc')
            ->get();

        $mealTypeLunchDay = DB::table('mealplannertbl')
            ->Where('meal_Time', 'Lunch')
            ->where('user_Id', Auth::id())
            ->where ('day_Selected', $daySelected)
            ->orderBy('date_Created', 'desc')
            ->get();

        $mealTypeDineDay = DB::table('mealplannertbl')
            ->Where('meal_Time', 'Dinner')
            ->where('user_Id', Auth::id())
            ->where ('day_Selected', $daySelected)
            ->orderBy('date_Created', 'desc')
            ->get();

        return view('WeeklyPlanner.mealPlannerDay',['day'=>$daySelected, 'today'=>$today, 'mealType'=>$mealTypeDay, 'mealTypeLunch' => $mealTypeLunchDay, 'mealTypeDine' => $mealTypeDineDay]);

    }
    public function storeBreakfastWithDay(Request $request, $dayChosen)
    {
        $validator = Validator::make($request->all(), [
            'breakfastFoodName' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/mealplanner/'.$dayChosen)
                ->withInput()
                ->withErrors($validator);
        }

        $today = date("D");
        // Create The Task...
        $uid = Auth::id();
        $meal = new mealPlannerModel;
        $meal->food_Wish = $request->breakfastFoodName;
        $meal->user_Id = $uid;
        $meal->meal_Time = 'Breakfast';
        $meal->food_Status = 'false';
        $meal->day_Selected = $dayChosen;
        $meal->save();
        return redirect('/mealplanner/'.$dayChosen);
    }
    public function storeLunchDay(Request $request, $dayChosen)
    {
        $validator = Validator::make($request->all(), [
            'lunchFoodName' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/mealplanner/'.$dayChosen)
                ->withInput()
                ->withErrors($validator);
        }

        // Create The Task...
        $today = date("D");
        $uid = Auth::id();
        $meal = new mealPlannerModel;
        $meal->food_Wish = $request->lunchFoodName;
        $meal->user_Id = $uid;
        $meal->meal_Time = 'Lunch';
        $meal->food_Status = 'false';
        $meal->day_Selected = $dayChosen;
        $meal->save();

        return redirect('/mealplanner/'.$dayChosen);

    }
    public function storeDinnerDay(Request $request,$dayChosen)
    {
        $validator = Validator::make($request->all(), [
            'dinnerFoodName' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/mealplanner/'.$dayChosen)
                ->withInput()
                ->withErrors($validator);
        }

        // Create The Task...
        $today = date("D");
        $uid = Auth::id();
        $meal = new mealPlannerModel;
        $meal->food_Wish = $request->dinnerFoodName;
        $meal->user_Id = $uid;
        $meal->meal_Time = 'Dinner';
        $meal->food_Status = 'false';
        $meal->day_Selected = $dayChosen;
        $meal->save();
        return redirect('/mealplanner/'.$dayChosen);

    }
    public function donestatusDay(Request $request,$mid,$day)
    {

        DB::table('mealplannertbl')
            ->where('id', '=', $mid)
            ->update(array('food_Status' => true));

        return redirect('/mealplanner/'.$day);

    }
    public function undostatusDay(Request $request,$mid,$day)
    {

        DB::table('mealplannertbl')
            ->where('id', '=', $mid)
            ->update(array('food_Status' => false));

        return redirect('/mealplanner/'.$day);

    }
}
