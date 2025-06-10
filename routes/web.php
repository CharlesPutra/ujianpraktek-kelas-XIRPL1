<?php

use App\Http\Controllers\PesananController;
use App\Http\Controllers\ServisInfinixController;
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



Route::get('/', function(){
    return view('welcome');
})->name('home');

//route servis
Route::resource('/data-servis-infinix',ServisInfinixController::class);

//route pesanan
Route::resource('pesanan',PesananController::class);