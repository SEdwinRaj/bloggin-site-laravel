<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;

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

Route::get('/auth', function () {
    return view('index');
});

Route::get('/dboard',[blogController::class,'show']);

Route::get('/create/page', function () {
    return view('create');
});

Route::post('/create',[blogController::class,'create']);

Route::get('/home', [blogController::class,'showAll']);

Route::get('/content/{id}',[blogController::class,'showPage']);