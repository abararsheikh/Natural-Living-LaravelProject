<?php

namespace App\Http\Controllers\WeeklyPlanner;

use App\bodyDataModel;
use App\BodyMeasureModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class bodyDataController extends Controller
{
    public function index()
    {
        $bodyDatarows = DB::table('bodydatatbl')
            ->where('user_Id', Auth::id())
            ->orderBy('date_Created', 'desc')
            ->get();
        $bodyMeasurerows = DB::table('bodymeasurementtbl')
            ->where('user_Id', Auth::id())
            ->orderBy('date_Created', 'desc')
            ->get();

        return View('WeeklyPlanner.bodyData')->with('rowsbm',$bodyMeasurerows)->with('rowsbd',$bodyDatarows);
    }
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'user_Height' => 'required',
                'user_Weight' => 'required',
                'user_Fat' =>'required',
                'user_Water' => 'required',
                'user_Muscles' => 'required'
            ]);
        $user_Id = Auth::id();
        $inputs = $request->all();
        $inputs['user_Id'] = $user_Id;
        bodyDataModel::create($inputs);
        return Redirect('/bodyData');
    }
    public function storeMeasurements(Request $request)
    {
        $user_Id = Auth::id();
        $inputs = $request->all();
        $inputs['user_Id'] = $user_Id;
        BodyMeasureModel::create($inputs);
        return Redirect('/bodyData');
    }


}
