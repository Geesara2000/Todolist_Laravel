<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\toDoController;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/',[homeController::class, "index"])->name('home');


//Todo
Route::prefix('/todo')->group(function (){
    Route::get('/',[toDoController::class, "index"])->name('todo');
    Route::post('/store',[toDoController::class, "store"])->name('todo.store');
    Route::get('/{task_id}/delete',[toDoController::class, "delete"])->name('todo.delete');
    Route::get('/{task_id}/done',[toDoController::class, "done"])->name('todo.done');

});


