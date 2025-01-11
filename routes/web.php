<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;//how to create controllerphp artisan make:controller UserController
// usercontroller jo hai wo name hai controller ka ;

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/',function(){
//     return view('first');
// });
//Route::get('user1',[UserController::class,'getUser']);
//Route::get('users', [UserController::class, 'getdata']);
//Route::get('/first', [UserController::class, 'userHome']);//Route::get('/first ye first.blade.php ki file hoti ahi');
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/courses', function () {
    return view('courses');
});
// routes/web.blade.php
Route::get('/web_development', function () {
    return view('web_dev'); // 'web_dev' is the name of your Blade view file
});
//  route data science.blade.php
Route::get('/data_science',function(){
    return view('data_science');// 'data_science' is the name of your Blade view file
});
// route o level.blade.php
Route::get('/o_level',function(){
    return view('o_level');
});
// Route::get('/getcss', [userController::class, 'getcss']);

