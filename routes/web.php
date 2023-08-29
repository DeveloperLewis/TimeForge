<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeneralRoutesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| General Routes
|--------------------------------------------------------------------------
*/

//Index
Route::get('/', [GeneralRoutesController::class, 'index']);

//Pricing
Route::get('/pricing', [GeneralRoutesController::class, 'pricing']);

//Features
Route::get('/features', [GeneralRoutesController::class, 'features']);

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
Route::get('/user/login', [UserController::class, 'login'])->middleware('guest')->name('login');

//Authenticate the user
Route::post('/user/login', [UserController::class, 'authenticate']);

//Log the user out
Route::post('/user/logout', [UserController::class, 'logout'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/

//Show dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

