<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bodyDataModel extends Model
{
    protected $table = 'bodydatatbl';
    protected $fillable = ['user_Id','date_Created','user_Height','user_Weight','user_Fat','user_Water','user_Muscles'];
    public $timestamps = false;
}
