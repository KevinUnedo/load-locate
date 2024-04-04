<?php

use App\Models\Item;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Api\ItemApiController;
use App\Http\Controllers\AuthController;

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
    return view('login', [
        "title" => "Login"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
})->name('home');

Route::get('/register', function () {
    return view('register', [
        "title" => "Register"
    ]);
});

Route::get('/report-found', function () {
    return view('reportfound', [
        "title" => "Report Found Item"
    ]);
});

Route::get('/forgot-password', function () {
    return view('forgotpassword', [
        "title" => "Forgot Password"
    ]);
});

Route::get('/report-lost', function () {
    return view('reportlost', [
        "title" => "Report Lost Item"
    ]);
});

Route::get('/recent-post', [ItemController::class, 'index']);
Route::get('item-detail/{detail}', [ItemController::class, 'show']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);
Route::middleware(['auth'])->group(function () {
    Route::post('/report-lost', [ItemController::class, 'createItem'])->name('report-lost');
    Route::post('/report-found', [ItemController::class, 'createItem'])->name('report-found');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
