<?php

use App\Http\Controllers\FieldController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users/index',
    [UserController::class, 'index'])
    ->name('users.index');

Route::get('/users/{user_id}',
    [UserController::class, 'show'])
    ->name('users.show');

Route::get('/items/{user_id}',
    [ItemController::class, 'show'])
    ->name('items.show');

Route::get('/fields/{user_id}',
    [FieldController::class, 'showRandomFieldInfo'])
    ->name('fields.showFieldInfo');
