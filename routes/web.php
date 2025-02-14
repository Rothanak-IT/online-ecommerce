<?php
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\MidtermController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('midterm');


// });
Route::get('midterm',[MidtermController::class,'midterm']);

Route::get('dashboard',[dashboardController::class,'dashboard']);
Route::get('product',[ProductController::class,'product']);
