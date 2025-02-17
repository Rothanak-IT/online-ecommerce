<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FileUploadController::class,'loadHomePage']);
Route::post('/file-upload', [FileUploadController::class,'FileUpload'])->name('FileUpload');
Route::get('/edit/{user}', [FileUploadController::class,'loadEditForm']);
Route::get('/delete/{user}', [FileUploadController::class,'deleteUser']);
Route::post('/update', [FileUploadController::class,'EditUser'])->name('EditUser');
Route::get('dashboard',[dashboardController::class,'dashboard']);
Route::get('user', [UserController::class,'user']);

