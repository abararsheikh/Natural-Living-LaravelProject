<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    //protected $primaryKey = 'id';
    protected $fillable = ['id','com_username','com_password', 'com_comment', 'com_date', 'com_forum', 'com_thread'];

    public $timestamps = false;

}
