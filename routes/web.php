<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;


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

//Route::get('/', function () {
//    return view('homepage');
//});

Route::get('/', [HomeController::class , 'index'])->name('homepage');

Route::get('/girisler', [HomeController::class , 'girisler'])->name('girisler');
Route::post('/girisler', [HomeController::class , 'postg'])->name('post.g');

Route::get('/cikislar', [HomeController::class , 'cikislar'])->name('cikislar');
Route::post('/cikislar', [HomeController::class , 'postc'])->name('post.c');
