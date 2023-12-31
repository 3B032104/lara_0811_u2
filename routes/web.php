<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
/*
// Route return string 'welcome'
Route::get('/', function () {
    return 'welcome';
});
*/
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

// Route get val return val string (Non-essential val ,if val is null val = Everybody)
// The Route name is hello.index
Route::get('hello2/{name?}', function($name = 'Everybody') {
    return 'Hello, '.$name;
})->name('hello.index');

// Route dashboard return string 'dashboard'
Route::get('dashboard', function() {
    return 'dashboard';
});

// Route dashboard the guoup prefix is admin ,return string 'dashboard'
Route::group(['prefix' => 'admin'], function() {
    Route::get('dashboard', function() {
        return 'admin dashboard';
    });
});

// Route home
Route::get('home', [HomeController::class, 'index'])->name('home.index');
