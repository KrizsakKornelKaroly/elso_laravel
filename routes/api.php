<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

//get all todo
Route::get('/todos', [TodoController::class, 'index']);

//get one todo
Route::get('/todos/{todo}', [TodoController::class, 'show']);

//add new todo
Route::post('/todos', [TodoController::class, 'store']);

//update todo
Route::patch('/todos/{todo}', [TodoController::class, 'update']);

//delete todo
Route::delete('/todos/{todo}', [TodoController::class, 'destroy']);