<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mealPlannerModel extends Model
{
    protected $table = 'mealplannertbl';
    protected $fillable = ['user_Id','date_Created','day_Selected','meal_Time','food_Wish','food_Status'];
    public $timestamps = false;

}
