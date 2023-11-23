<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $task1 = new stdClass();
    $task1->id = 1;
    $task1->title = "task 1";
    $tasks = [
        $task1
    ];
});

Route::get('/tasks', function () {
    return view('tasks',[
        'tasks' => []
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/users', function () {
    return view('users',[
        'users' => []
    ]);
});
