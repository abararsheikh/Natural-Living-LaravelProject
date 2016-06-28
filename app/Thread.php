<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table = 'thread';
    //protected $primaryKey = 'id';
    protected $fillable = ['id','thread_topic','thread_content','thread_username', 'thread_password', 'thread_forum', 'thread_date'];

    public $timestamps = false;

}
