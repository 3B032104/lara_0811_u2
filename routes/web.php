<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route return view welcome
Route::get('/', function () {
    return view('welcome');
});

// Route return string 'welcome'
Route::get('/', function () {
    return 'welcome';
});

// Route redirect to route r2
Route::get('r1', function() {
    return redirect('r2');
});

// Route return view welcome
Route::get('r2', function() {
    return view('welcome');
});

// Route get val return val string
Route::get('hello/{name}', function($name) {
    return 'Hello, '.$name;
});
