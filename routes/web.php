<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
//Route::view('/home','site.home.index')->name('home');
Route::view('/register','site.auth.register')->name('register_form');
Route::view('/signin','site.auth.signin')->name('signin_form');
//Route::view('/index','site.user.index')->name('index');
Route::post('/register',[UserController::class,'register'])->name('register')   ;
Route::post('/signin',[UserController::class,'signin'])->name('signin');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::get('/index',[App\Http\Controllers\UserController::class,'GetAllPost'])->name('index');
Route::get('/home',[App\Http\Controllers\PostController::class,'GetAllPost'])->name('home');


Route::resource('posts',PostController::class);
Route::resource('users',UserController::class);
