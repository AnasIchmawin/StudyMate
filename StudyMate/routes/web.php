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


// Route pour afficher le formulaire de login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

// Route pour traiter la soumission du formulaire de login
Route::post('login', [LoginController::class, 'getDataFromLogin'])->name('login.post');

// Route pour afficher le formulaire d'inscription
 Route::get('register', [LoginController::class, 'showRegisterForm'])->name('register');

//  Route pour traiter la soumission du formulaire d'inscription
 Route::post('register', [LoginController::class, 'getDataFromRegister'])->name('register.post');











Route::get('/modules', [ModuleController::class, 'index'])->name('modules.index');


// Route to show the form to add a new module
Route::get('/modules/create', [ModuleController::class, 'create'])->name('modules.create');
Route::post('/modules', [ModuleController::class, 'store'])->name('modules.store');

// Route to show all documents within a module with a button to add a new document
Route::get('/modules/{id}', [ModuleController::class, 'show'])->name('modules.show');

// Route to show the form to add a new document to a module
Route::get('/modules/{id}/documents/create', [DocumentController::class, 'create'])->name('documents.create');
Route::post('/modules/{id}/documents', [DocumentController::class, 'store'])->name('documents.store');


// Route to show all tasks with a button to add a new task
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

//task.create
Route::get('/tasks/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::get('/search', [TaskController::class, 'SearchTask']);

Route::post('/update-task/{id}', [TaskController::class, 'updateTaskStatus'])->name('updateTaskStatus');

Route::get('/delete-task/{id}', [TaskController::class, 'deleteTask'])->name('deleteTask');




