<?php

use App\Http\Controllers\memberController;
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

// Route::resource('member/', memberController::class);
Route::get('/create/id', [memberController::class, 'createId']);
Route::get('/create/en', [memberController::class, 'createEn']);
