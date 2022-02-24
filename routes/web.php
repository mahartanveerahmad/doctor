<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

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
//Home Controller and routes
Route::get('/',[HomeController::class,"index"])->name('home');


//Admin controller and routes
Route::resource('/admin-dashboard',Admincontroller::class);


//Doctor Controller and routes
Route::resource('/doctor-dashboard',DoctorController::class);



//Patient Controller and routes

Route::resource('/patient-dashboard',PatientController::class);