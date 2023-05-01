<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HalamanController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/ 

/*Route::get('/', function () {
    return view('welcome');
});*/


//Route::get('sis', [SiswaController::class,'index']);
//Route::get('siswa/{id}', [SiswaController::class,'detail']);

Route::resource('siswa', SiswaController::class);

Route::get('t', [HalamanController::class,'index']);