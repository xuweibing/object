<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userssinfo extends Model
{
    protected $table = 'userss_info';
    protected $primaryKey='id';
    //自动维护时间戳
    public $timestamps = false;
}
