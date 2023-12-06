<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocteurController;
use App\Http\Controllers\patienController;
use App\Http\Controllers\servieController;
use App\Http\Controllers\specialiteController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\rendezvousController;




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

Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::resource('docteurs', DocteurController::class);
Route::get('supprimer-docteurs/{id}', [DocteurController::class,'destroy']);

Route::resource('patients', patientController::class);
Route::get('supprimer-patients/{id}', [patientController::class,'destroy']);

Route::resource('docteurs', serviceController::class);
Route::get('supprimer-docteurs/{id}', [serviceController::class,'destroy']);

Route::resource('patients', specialiteController::class);
Route::get('supprimer-patients/{id}', [specialiteController::class,'destroy']);

Route::resource('patients', contactController::class);
Route::get('supprimer-patients/{id}', [contactController::class,'destroy']);

Route::resource('patients', rendezvousController::class);
Route::get('supprimer-patients/{id}', [rendezvousController::class,'destroy']);



