<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('category',App\Http\Controllers\DqcmodelController::class)->only(['index','store','show','update','destroy']);
Route::resource('model', 'App\Http\Controllers\Api\DqcmodelController')->only(['index','store','show','update','destroy']);
Route::resource('dqc', 'App\Http\Controllers\Api\Dqc84Controller')->only(['index','store','show','update','destroy']);
Route::resource('dqc841', 'App\Http\Controllers\Api\Dqc841Controller')->only(['index','store','show','update','destroy']);

// Route::apiResource('model', 'App\Http\Controllers\Api\DqcmodelController');
// Route::apiResource('dqc', 'App\Http\Controllers\Api\Dqc84Controller');
// Route::apiResource('dqc1', 'App\Http\Controllers\Api\Dqc841Controller');

