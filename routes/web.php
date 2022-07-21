<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

//Route::get('/email', [AuthController::class, 'email']);

Route::get('/', function () {
    return view('landing');
});

Route::get('/livestream', function () {
    return view('livestream');
});

Route::get('/livestream2', function() {
    return view('livestream2');
});

Route::get('/login', function () {
    return view('login');
})->middleware(['auth','verified'])->name('login');

require __DIR__.'/auth.php';
