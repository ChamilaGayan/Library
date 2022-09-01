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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::any('/home', [App\Http\Controllers\HomeController::class, 'show'])->name('home');

Route::put('/home', [App\Http\Controllers\HomeController::class, 'update'])->name('updateBook');

Route::get('edit-book/{id}', [App\Http\Controllers\BookController::class, 'edit']);
Route::put('update-book/{id}', [App\Http\Controllers\BookController::class, 'update']);

// Route::put('handover-book/{id}', [App\Http\Controllers\BookController::class, 'handover']);
