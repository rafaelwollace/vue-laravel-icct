<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dcqmodel', [App\Http\Controllers\Api\DqcmodelController::class, 'dcqmodel'])->name('dcqmodel');
Route::get('/dqc84', [App\Http\Controllers\Api\Dqc84Controller::class, 'dqc84'])->name('dqc84');
Route::get('/dqc841', [App\Http\Controllers\Api\Dqc841Controller::class, 'dqc841'])->name('dqc841');
