<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\RelojController;

Route::get('/relojes', [RelojController::class, 'index']); 
Route::post('/relojes', [RelojController::class, 'store']); 
Route::get('/relojes/{id}', [RelojController::class, 'show']); 
Route::put('/relojes/{id}', [RelojController::class, 'update']); 
Route::delete('/relojes/{id}', [RelojController::class, 'destroy']); 
