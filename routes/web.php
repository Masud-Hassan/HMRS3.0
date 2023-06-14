<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\jobController;

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

Route::get('/login', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'authenticate']);

Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'register']);

Route::get('/AdminDash', function () {
    return view('AdminDash');
});

Route::get('/jobpost', [jobController::class, 'index']);
Route::post('/jobpost', [jobController::class, 'post']);
Route::get('/jobcircular', [jobController::class, 'display']);
Route::post('/apply', [jobController::class, 'application']);
Route::post('/appsubmit', [jobController::class, 'appSubmit']);
