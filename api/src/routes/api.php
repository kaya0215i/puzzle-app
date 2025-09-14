<?php

use App\Http\Controllers\FieldController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users/index',
    [UserController::class, 'index'])
    ->middleware('auth:sanctum')
    ->name('users.index');

Route::post('/users/store',
    [UserController::class, 'store'])
    ->name('users.store');

Route::post('/users/update',
    [UserController::class, 'update'])
    ->middleware('auth:sanctum')
    ->name('users.update');

Route::get('/users/{user_id}',
    [UserController::class, 'show'])
    ->name('users.show');

Route::get('/fields/{user_id}',
    [FieldController::class, 'showRandomFieldInfo'])
    ->name('fields.showFieldInfo');
