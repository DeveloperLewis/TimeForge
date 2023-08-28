<?php

use App\Http\Controllers\GeneralRoutesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| General Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [GeneralRoutesController::class, 'index']);

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

//Show user registration form
Route::get('/user/register', [UserController::class, 'create'])->middleware('guest');

//Store the user in the database
Route::post('/user/register', [UserController::class, 'store']);

//Show user login form
Route::get('/user/login', [UserController::class, 'login'])->middleware('guest');

//Authenticate the user
Route::post('/user/login', [UserController::class, 'authenticate']);

//Log the user out
Route::post('/user/logout', [UserController::class, 'logout'])->middleware('auth');;

