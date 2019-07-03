<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userss extends Model
{
    protected $table = 'userss';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['username','password','email','token','phone','created_at','updated_at'];
    //修改器对数据做自动处理
    public function getStatusAttribute($value){
    	$status=[0=>'禁用',1=>'开启'];
    	return $status[$value];
    }
    //用户详情关联方法
    public function info(){
    	return $this->hasOne('App\Models\Userssinfo','u_id');
    }

    //用户收货地址关联
    public function address(){
    	return $this->hasMany('App\Models\Userssaddress','u_id');
    }
}
