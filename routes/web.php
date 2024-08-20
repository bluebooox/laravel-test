<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('hello', function() {
//     return view('hello.index');
// });

Route::get('hello','App\Http\Controllers\HelloController@index');

Route::post('hello', 'App\Http\Controllers\HelloController@post');

Route::get('/about', function () {
    return view('about');
})->middleware('auth')->name('about');

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AuthController::class,'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
