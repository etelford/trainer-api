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

Route::middleware(['client'])->group(function () {
    Route::prefix('/trainers')->group(function () {
        Route::get('/{id}', 'TrainersController@show');
        Route::post('/', 'TrainersController@store');
    });
});
