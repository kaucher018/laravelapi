<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\memController;
use App\Http\Controllers\authCpntroller;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

route::get('/test',function(){
    return ['name'=>"kaucher",'class'=>"high"];
});

Route::get('get',[userController::class,'get']);

Route::post('add',[userController::class,'add']);
route::put('update',[userController::class,'update']);
route::Delete('delete/{id}',[userController::class,'delete']);
Route::get('search/{name}',[userController::class,'search']);

Route::resource('meme',memController::class);
route::post('singup',[authCpntroller::class,'singup']);

route::post('login',[authCpntroller::class,'loging']);


