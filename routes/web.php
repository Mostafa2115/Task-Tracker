<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Models\Task;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/tasks/add', function () {
    return view('tasks.add');
});

Route::get('/tasks/{task}/edit', function (Task $task) {
    return view('tasks.edit', compact('task'));
})->name('tasks.edit');

Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::post('/tasks/{task}/complete', [TaskController::class, 'markAsCompleted'])->name('tasks.markAsCompleted');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::post('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.delete');
