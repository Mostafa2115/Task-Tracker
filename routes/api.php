<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;



Route::middleware('auth:sanctum')->group(function () {
    Route::middleware('user')->group(function () {
        Route::get('/', [UserController::class, 'show']);
        Route::put('/edit', [UserController::class, 'update']);
        Route::delete('/delete', [UserController::class, 'destroy']);
    });
    Route::middleware('tasks')->group(function () {
        Route::get('/', [TaskController::class, 'index']);
        Route::post('/', [TaskController::class, 'store'])->name('tasks.store');
        Route::put('/{task}', [TaskController::class, 'update'])->name('tasks.update');
        Route::delete('/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
    });
});
