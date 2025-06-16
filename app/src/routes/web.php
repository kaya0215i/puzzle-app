<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('accounts/index', [AccountController::class, 'index']);
Route::get('accounts/accountList', [AccountController::class, 'showAccounts']);

Route::get('users/userList', [UserController::class, 'showUsers']);
Route::get('users/itemList', [UserController::class, 'showItems']);
Route::get('users/userItemList', [UserController::class, 'showUserItems']);


Route::get('/{error_id?}', [AuthController::class, 'index']);
