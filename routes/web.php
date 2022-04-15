<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CollectionCenterController;

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

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::post('/appointment',[AdminController::class,'appointment']);
Route::get('book_appointment',[AdminController::class,'book_appointment']);

Route::get('/myappointment',[HomeController::class,'myappointments']);

Route::delete('/deleteappointment/{id}',[HomeController::class,'deleteappointment']);

Route::get('/approve_appointment',[AdminController::class,'approve_appointment']);

Route::get('/approved_appointment',[AdminController::class,'approved_appointment']);

Route::get('/approve_patient/{id}',[AdminController::class,'approve_patient']);

Route::get('/complete_patient/{id}',[AdminController::class,'complete_patient']);

Route::get('completed_appointment',[AdminController::class,'completed_patient']);

Route::get('/cancel_patient/{id}',[AdminController::class,'cancel_patient']);

Route::get('/mail_patient/{id}',[AdminController::class,'mail_patient']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

Route::get('add_collection_center',[CollectionCenterController::class,'Index']);
Route::post('add_CC',[CollectionCenterController::class,'store']);

Route::get('add_admin',[AdminController::class,'add_admin']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
