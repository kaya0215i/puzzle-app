<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('accounts/admin', [AccountController::class, 'showAdmin']);

Route::get('accounts/userList', [AccountController::class, 'showUsers']);
Route::get('accounts/scoreList', [AccountController::class, 'showScores']);

Route::get('/{error_id?}', [AccountController::class, 'login']);

Route::post('doLogin', [AccountController::class, 'doLogin']);

Route::get('accounts/doLogout', [AccountController::class, 'doLogout']);


