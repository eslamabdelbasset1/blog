<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['auth']],function(){
    Route::get('/',[\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
    Route::get('posts',[\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
    Route::get('posts/create',[\App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
    Route::get('posts/{post}',[\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
    Route::post('posts/',[\App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();
    dd($user);

    // $user->token
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
