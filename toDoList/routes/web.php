<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\toDoController;
use Illuminate\Support\Facades\Route;

Route::get('/',[homeController::class, "index"])->name('home');
Route::get('/todo',[toDoController::class, "index"])->name('todo');
