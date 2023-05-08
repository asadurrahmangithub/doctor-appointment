<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::controller(FrontEndController::class)->group(function () {
    Route::get('/', 'index')->name('home');

});
Route::controller(DoctorController::class)->group(function () {
    Route::get('/add-doctor', 'doctor')->name('add.doctor');
    Route::post('/save-doctor', 'store')->name('store.doctor.info');
    Route::get('/edit-doctor/{id}', 'edit')->name('edit.doctor.info');
    Route::post('/update-doctor', 'update')->name('update.doctor.info');
    Route::get('/delete-doctor/{id}', 'delete')->name('delete.doctor.info');
});
Route::controller(AppointmentController::class)->group(function () {
    Route::get('/appointment', 'index')->name('appointment');

});

