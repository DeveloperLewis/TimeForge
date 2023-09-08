<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EntriesController;
use App\Http\Controllers\GeneralRoutesController;
use App\Http\Controllers\UserController;
use App\Models\Entry;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| General Routes
|--------------------------------------------------------------------------
*/

//Index
Route::get('/', [GeneralRoutesController::class, 'index'])->name('index');

//Pricing
Route::get('/pricing', [GeneralRoutesController::class, 'pricing'])->name('pricing');

//Features
Route::get('/features', [GeneralRoutesController::class, 'features'])->name('features');

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
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

/*
| Entries
*/
Route::get('/dashboard/entries', [EntriesController::class, 'index'])->middleware('auth')->name('dashboard-entries');

Route::post('/entry/add', [EntriesController::class, 'store'])->middleware('auth');

Route::put('/entry/{entry}/edit', [EntriesController::class, 'updateTime'])->middleware('auth');

Route::delete('/entry/{entry}/delete', [EntriesController::class, 'destroy'])->middleware('auth');


