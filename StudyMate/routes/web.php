<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/index');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'getDataFromLogin'])->name('login.post');
Route::get('register', [LoginController::class, 'showRegisterForm'])->name('register');
Route::post('register', [LoginController::class, 'getDataFromRegister'])->name('register.post');

Route::get('/modules', [ModuleController::class, 'index'])->name('modules.index');
Route::get('/modules/create', [ModuleController::class, 'create'])->name('modules.create');
Route::post('/modules', [ModuleController::class, 'store'])->name('modules.store');
Route::get('/modules/{id}', [ModuleController::class, 'show'])->name('modules.show');
Route::get('/modules/{id}/documents/create', [DocumentController::class, 'create'])->name('documents.create');
Route::post('/modules/{id}/documents', [DocumentController::class, 'store'])->name('documents.store');


Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/search', [TaskController::class, 'SearchTask']);
Route::post('/update-task/{id}', [TaskController::class, 'updateTaskStatus'])->name('updateTaskStatus');
Route::delete('/delete-task/{id}', [TaskController::class, 'deleteTask'])->name('deleteTask');

Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
