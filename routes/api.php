<?php

use App\Http\Controllers\FarmController;
use App\Http\Controllers\PlantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => '/ackerer'], function () {
    Route::get('/plants', [PlantController::class, 'findAll']);
    Route::get('/plants/slug/{slug}', [PlantController::class, 'findBySlug']);
    Route::get('/farms', [FarmController::class, 'findAll']);
});
