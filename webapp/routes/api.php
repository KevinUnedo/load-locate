<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ItemApiController;
use App\Http\Controllers\Api\UserApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('items', ItemApiController::class);
Route::apiResource('users', UserApiController::class);
Route::get('/items', [ItemApiController::class, 'index'])->name('items.index');
Route::get('/users/{user_id}/items', [ItemApiController::class, 'userItems'])->name('items.user');
Route::patch('/api/users/{id}', 'UserApiController@update');
Route::patch('/api/users/{id}', [UserApiController::class, 'update']);
Route::patch('/api/users/{id}', 'Api\UserApiController@update');
Route::patch('/api/users/{id}', 'UserApiController@update');
Route::patch('/api/users/{id}', [UserApiController::class, 'update']);