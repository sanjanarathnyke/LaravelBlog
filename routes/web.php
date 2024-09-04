<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Welcomecontroller;
use Illuminate\Support\Facades\Route;



Route::get('/',[Welcomecontroller::class,'index'])->name('welcome');

Route::post('/posts/store',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/{postId}/show',[PostController::class,'show'])->name('posts.show');
Route::get('/posts/all',[Welcomecontroller::class,'allposts'])->name('posts.all');
Route::get('/posts/{postId}/edit',[PostController::class,'edit'])->name('posts.edit');
Route::post('/posts/{postId}/update',[PostController::class,'update'])->name('posts.update');
Route::get('/posts/{postId}/delete',[PostController::class,'delete'])->name('posts.delete');    


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
