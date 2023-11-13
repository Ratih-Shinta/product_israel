<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Models\student;
use App\Http\Controllers\productController;
use App\Models\product;

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

Route::get('/student/all', [studentController::class, 'index']);
Route::get('/student/detail/{student}', [studentController::class, 'show']);

Route::get('/product/all', [productController::class, 'index']);
Route::get('/product/detail/{product}', [productController::class, 'show']);