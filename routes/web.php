<?php

use App\Http\Controllers\AlifController;
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

Route::get('/', [AlifController::class, 'getdata']);
Route::get('/alif/{id}', [AlifController::class, 'detail']);
Route::get('/about', function () {
    return view('about');
});

