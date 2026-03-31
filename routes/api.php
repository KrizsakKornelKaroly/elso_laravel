<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;

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


// get all users
Route::get('/users', [UserController::class, 'index']);

// get one user
Route::get('/users/{user}', [UserController::class, 'show']);

// add new user
Route::post('/users', [UserController::class, 'store']);

// update user
Route::patch('/users/{user}', [UserController::class, 'update']);

// delete user
Route::delete('/users/{user}', [UserController::class, 'destroy']);