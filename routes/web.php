<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sebaranpekerjaanController;
use App\Http\Controllers\sebaranpendidikanController;
use App\Http\Controllers\penghasilanController;
use App\Http\Controllers\profilpendudukController;
use App\Http\Controllers\indexController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });

//Route::view('list','list');
Route::get('dashboard',[indexController::class,'Show']);

//Route::view('list','list');
Route::get('pendidikan',[sebaranpendidikanController::class,'Show']);

Route::get('pekerjaan',[sebaranpekerjaanController::class,'Show']);

Route::get('penghasilan',[penghasilanController::class,'Show']);

Route::get('profilpenduduk',[profilpendudukController::class,'Show']);
