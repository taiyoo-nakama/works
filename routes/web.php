<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;


Route::get('/', [WorkerController::class,'index']);
Route::post('/register',[WorkerController::class,'register']);
Route::get('/login', [WorkerController::class,'login']);
Route::get('/attendance', [WorkerController::class,'attendance']);
