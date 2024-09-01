<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JourneyController;
use App\Http\Controllers\DayController;
use App\Http\Controllers\StopController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\RatingController;

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

// Definisci le rotte API per i tuoi controller
Route::apiResource('journeys', JourneyController::class);
Route::apiResource('days', DayController::class)->except(['index', 'show']);
Route::apiResource('stops', StopController::class)->except(['index', 'show']);
Route::apiResource('notes', NoteController::class)->except(['index', 'show']);
Route::apiResource('ratings', RatingController::class)->except(['index', 'show']);