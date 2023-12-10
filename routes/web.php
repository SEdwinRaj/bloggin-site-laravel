<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\userController;

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
Route::get("/", function () { return view('index'); });

Route::post("/sign_up", [userController::class,"signup"]);

Route::post("/sign_in", [userController::class,"signin"]);

Route::get("/sign_in", function () { return view("index"); });

Route::get("/tohome", [blogController::class,"home"]);

Route::post("/dboard/{d2}", [blogController::class,'show1']);

Route::get('/create/page/{username}', [blogController::class,'createPage']);

Route::post('/create/{username}', [blogController::class,'create']);

Route::get('/dth/{username}', [blogController::class,'dth']);

Route::get('/content/{id}', [blogController::class,'content']);