<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/custom', function () {
    return 'hello world custom';
});

use App\Http\Controllers\GreetController;


Route::get('/hello', function () {
    return 'Hello, Laravel';
});

Route::get('/greet', [GreetController::class, 'greetPage']);

use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);

/**Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');*/
