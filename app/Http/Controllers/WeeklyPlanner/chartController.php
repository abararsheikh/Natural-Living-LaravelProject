<?php

namespace App\Http\Controllers\WeeklyPlanner;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class chartController extends Controller
{
    public function displayChart()
    {
        $totalMonday = $this->chartTotalCalculation('Mon');
        $doneMonday = $this->chartDoneCalculation('Mon');
        $totalTuesday = $this->chartTotalCalculation('Tue');
        $doneTuesday = $this->chartDoneCalculation('Tue');
        $totalWednesday = $this->chartTotalCalculation('Wed');
        $doneWednesday = $this->chartDoneCalculation('Wed');
        $totalThursday = $this->chartTotalCalculation('Thu');
        $doneThursday = $this->chartDoneCalculation('Thu');
        $totalFriday = $this->chartTotalCalculation('Fri');
        $doneFriday = $this->chartDoneCalculation('Fri');
        $totalSaturday = $this->chartTotalCalculation('Sat');
        $doneSaturday = $this->chartDoneCalculation('Sat');
        $totalSunday = $this->chartTotalCalculation('Sun');
        $doneSunday = $this->chartDoneCalculation('Sun');


        $totalMon = $this->numberReturn($totalMonday);
        $doneMon = $this->numberReturn($doneMonday);
        $calculatedMon = $this->calculatedRatio($totalMon,$doneMon);

        $totalTue = $this->numberReturn($totalTuesday);
        $doneTue = $this->numberReturn($doneTuesday);
        $calculatedTue = $this->calculatedRatio($totalTue,$doneTue);

        $totalWed = $this->numberReturn($totalWednesday);
        $doneWed = $this->numberReturn($doneWednesday);
        $calculatedWed = $this->calculatedRatio($totalWed,$doneWed);


        $totalThu = $this->numberReturn($totalThursday);
        $doneThu = $this->numberReturn($doneThursday);
        $calculatedThu = $this->calculatedRatio($totalThu,$doneThu);

        $totalFri = $this->numberReturn($totalFriday);
        $doneFri = $this->numberReturn($doneFriday);
        $calculatedFri = $this->calculatedRatio($totalFri,$doneFri);

        $totalSat = $this->numberReturn($totalSaturday);
        $doneSat = $this->numberReturn($doneSaturday);
        $calculatedSat = $this->calculatedRatio($totalSat,$doneSat);

        $totalSun = $this->numberReturn($totalSunday);
        $doneSun = $this->numberReturn($doneSunday);
        $calculatedSun = $this->calculatedRatio($totalSun,$doneSun);

        //return view('WeeklyPlanner.chartPlanner');

        // return View('WeeklyPlanner.chartPlanner', ['mon' => $calculatedMon, 'tue'=> $calculatedTue, 'wed'=>$calculatedWed,'thu'=>$calculatedThu, 'fri'=>$calculatedFri, 'sat'=>$calculatedSat, 'sun'=>$calculatedSun]);
        return View('WeeklyPlanner.chartPlanner')->with(['mon' => $calculatedMon, 'tue'=> $calculatedTue, 'wed'=>$calculatedWed,'thu'=>$calculatedThu, 'fri'=>$calculatedFri, 'sat'=>$calculatedSat, 'sun'=>$calculatedSun]);

    }
    public function chartTotalCalculation($day)
    {
        $totalRows = DB::Table('mealplannertbl')
            ->select(DB::raw('count(*) as rows_count'))
            ->where('day_Selected',$day)
            ->where('user_Id',Auth::id())
            ->get();
        return $totalRows;
    }
    public function chartDoneCalculation($day)
    {
        $totalRows = DB::Table('mealplannertbl')
            ->select(DB::raw('count(*) as rows_count'))
            ->where('day_Selected',$day)
            ->where('user_Id',Auth::id())
            ->where('food_Status',true)
            ->get();
        return $totalRows;
    }
    public function numberReturn($item)
    {
        foreach ($item as $item1) {
            $totalMon =  $item1->rows_count;
            return $totalMon;
        }
    }
    public function calculatedRatio($item1,$item2)
    {
        if ($item2 == 0) {
            return 0;
        } else {
            return ($item2 / $item1) * 100;
        }
    }

}
