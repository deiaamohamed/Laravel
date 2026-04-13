<?php

use App\Http\Controllers\Postcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post/{id}', [Postcontroller::class,'show'])-> where("id",'[0-9]+');

Route::get('/posts',[Postcontroller::class,'index']);
Route::get('/posts/create', [Postcontroller::class,'create']);
Route::post('/posts', [Postcontroller::class,'store']);
Route::get('/posts/edit/{id}', [Postcontroller::class,'edit']);
Route::put('/posts', [Postcontroller::class,'update']);
Route::delete('/posts/{id}', [Postcontroller::class,'destroy']);
Route::get('/',function(){
    return view('sharedlayout.app');
});
