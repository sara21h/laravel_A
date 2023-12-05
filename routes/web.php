<?php


use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TaskController::class,'index']);

Route::get('/tasks', [TaskController::class,'index']);

Route::get('/contact', [PagesController::class,'contact']);

Route::get('/about', [PagesController::class,'about']);

Route::get('/users', [UserController::class,'index']);


