<?php

use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post/{id}', [Postcontroller::class,'show'])-> where("id",'[0-9]+');

Route::get('/posts',[Postcontroller::class,'index'])->middleware('auth');
Route::get('/posts/create', [Postcontroller::class,'create']);
Route::post('/posts', [Postcontroller::class,'store']);
Route::get('/posts/edit/{id}', [Postcontroller::class,'edit']);
Route::put('/posts', [Postcontroller::class,'update']);
Route::delete('/posts/{id}', [Postcontroller::class,'destroy']);
Route::get('/',function(){
    return view('sharedlayout.app');
});

Route::get('/dashboard', function () {
    return redirect('/posts');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
