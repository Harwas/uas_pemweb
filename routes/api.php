<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuItemController;

Route::get('/menu-items', [MenuItemController::class, 'index']);
Route::get('/menu-items/{id}', [MenuItemController::class, 'show']);
Route::post('/menu-items', [MenuItemController::class, 'store']);
Route::put('/menu-items/{id}', [MenuItemController::class, 'update']);
Route::delete('/menu-items/{id}', [MenuItemController::class, 'destroy']);
