<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserItemsController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

Route::prefix('accounts')->name('accounts.')->controller(AccountController::class)
    ->middleware(AuthMiddleware::class)
    ->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('accountList', 'showAccounts')->name('accountList');;
    });

Route::prefix('users')->name('users.')->controller(UserController::class)
    ->middleware(AuthMiddleware::class)
    ->group(function () {
        Route::get('index', 'index')->name('inex');
        Route::get('userInfo/{id}/{from}/{page}', 'showUserInfo')->name('userInfo');
    });

Route::prefix('items')->name('items.')->controller(ItemController::class)
    ->middleware(AuthMiddleware::class)
    ->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'createItem')->name('create');
        Route::post('store', 'storeItem')->name('store');
        Route::post('confirm/{id}', 'confirmItem')->name('confirm');
        Route::post('destroy/{id}', 'destroyItem')->name('destroy');
        Route::match(['get', 'post'], 'edit/{id}', 'editItem')->name('edit');
        Route::post('update/{id}', 'updateItem')->name('update');
        Route::get('result', 'result')->name('result');
    });

Route::prefix('userItems')->name('userItems.')->controller(UserItemsController::class)
    ->middleware(AuthMiddleware::class)
    ->group(function () {
        Route::get('index', 'index')->name('index');
    });

Route::prefix('fields')->name('fields.')->controller(FieldController::class)
    ->middleware(AuthMiddleware::class)
    ->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('fieldInfo/{id}/{page}', 'showFieldInfo')->name('userInfo');;
    });

Route::get('/{error_id?}', [AuthController::class, 'index']);
