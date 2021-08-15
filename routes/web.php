<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\ReactController;
use Illuminate\Support\Facades\Route;

// Route::get('/','ReactController');
Route::get('/login', [ReactController::class,'index'])->name('login');
Route::any('/{route?}',[ReactController::class,'index'])->where('route','(.*)');