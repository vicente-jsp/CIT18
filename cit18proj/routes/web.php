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
