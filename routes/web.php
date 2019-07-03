<?php

//模板继承
Route::resource('/admin','Admin\AdminController');

//后台的用户模块
Route::resource('/adminusers','Admin\UsersController');