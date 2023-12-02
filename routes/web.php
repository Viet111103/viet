<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/login', [LoginController::class, 'showForm'])->name('login');
Route::post('login', [LoginController::class,'authenticate'])->name('login');

Route::get('/', [BookController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('pages.home');
// });
