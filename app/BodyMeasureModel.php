<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BodyMeasureModel extends Model
{
    protected $table = 'bodymeasurementtbl';
    protected $fillable = ['user_Id','date_Created','user_Chest','user_BicepsL','user_BicepsR','user_Thighs','user_Calves','user_Waist'];
    public $timestamps = false;
}
