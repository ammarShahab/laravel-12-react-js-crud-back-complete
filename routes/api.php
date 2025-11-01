<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
});

// 15. here we will define our api routes later

// 16. now we are going to create resource controller by "php artisan make:controller PostController --resource" which will create a file name PostController in Controllers folder which will create all the crud methods.

// 17. create Route then to see all routes run "php artisan route:list" u will see created all routes for PostController in terminal
Route::resource('posts', PostController::class);

