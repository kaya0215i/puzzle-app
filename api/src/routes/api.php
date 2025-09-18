<?php

use App\Http\Controllers\FieldController;
use App\Http\Controllers\FriendController;
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

Route::post('/fields/store',
    [FieldController::class, 'store'])
    ->middleware('auth:sanctum')
    ->name('fields.store');

Route::get('/fields/{rank_id}/{round}',
    [FieldController::class, 'getFieldInfo'])
    ->middleware('auth:sanctum')
    ->name('fields.showFieldInfo');

Route::get('/friends/index',
    [FriendController::class, 'index'])
    ->middleware('auth:sanctum')
    ->name('friends.index');

Route::get('/friends/sendFriendRequest/{user_name}',
    [FriendController::class, 'sendFriendRequest'])
    ->middleware('auth:sanctum')
    ->name('friends.sendFriendRequest');

Route::get('/friends/getArrivedFriendRequests',
    [FriendController::class, 'getArrivedFriendRequests'])
    ->middleware('auth:sanctum')
    ->name('friends.getArrivedFriendRequests');

Route::get('/friends/acceptFriendRequest/{requester_user_name}',
    [FriendController::class, 'acceptFriendRequest'])
    ->middleware('auth:sanctum')
    ->name('friends.acceptFriendRequest');
