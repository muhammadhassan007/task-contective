<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


// this is the route for IP- Address Log

Route::get('/ip-address-log', function () {
    return 'Check the logs for the IP address. dire.. Storage/logs/laravel.log';
})->middleware('log.ip')->name('ip.log');

// these are the routes for file upload

Route::middleware('auth')->group(function () {
    Route::get('/upload', [FileUploadController::class, 'view'])->name('upload.form'); 
    Route::post('/upload', [FileUploadController::class, 'upload'])->name('file.upload');
});


// Task no. 3

// The Laravel service container is a powerful tool used for dependency
//  injection and managing class dependencies. It provides a way to bind 
//  classes and interfaces to the container, which then resolves these 
//  dependencies when needed. 



// these are the Breeze provided routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
    
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';