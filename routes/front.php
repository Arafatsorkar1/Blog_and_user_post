<?php
use  App\Http\Controllers\Front\Profilecontroller;
use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'user','as'=>'user.','middleware'=>['auth','user']],function (){
    Route::resource('/profile',Profilecontroller::class);

});
