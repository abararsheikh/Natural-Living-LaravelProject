<?php

namespace App\Http\Controllers\WeeklyPlanner;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DailyQuoteController extends Controller
{
    public function index()
    {
        return view('WeeklyPlanner.dailyquote');
    }
}
