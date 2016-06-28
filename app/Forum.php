<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forum';
    //protected $primaryKey = 'id';
    protected $fillable = ['id','forum_title','forum_description', 'forum_password'];

    public $timestamps = false;

}
