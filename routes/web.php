<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Mail\NewUserWelcomeMail;

Auth::routes();

Route::get('/mail', function () {
    return new NewUserWelcomeMail();
});

Route::post('follow/{user}', [App\Http\Controllers\FollowsController::class, 'store']);

Route::get('/', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('/post', [App\Http\Controllers\PostController::class, 'store']);
Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show']);
Route::delete('/post/{post}/delete', [App\Http\Controllers\PostController::class, 'destroy']);

Route::get('/profile/{user:username}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user:username}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user:id}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');


Route::get('/about', function() {
    return view('pages.about');
});