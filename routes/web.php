<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/personal-details', function () {
    return view('index');
});

Route::get('/intake-course-selection', function () {
    return view('intake');
});

Route::get('/education-background', function () {
    return view('education');
});

