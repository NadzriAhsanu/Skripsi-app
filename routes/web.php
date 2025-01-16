<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DataBidanController;
use App\Http\Controllers\Admin\DataBidanScheduleController;
use App\Http\Controllers\Admin\DataPatientController;
use App\Http\Controllers\Admin\DataRekamMedisController;
use App\Http\Controllers\Admin\DataUserController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\bidan\BidanController;
use App\Http\Controllers\patient\PendaftaranController;

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

// Route::view('/', 'pages.admin.dashboard')->name('dashboard');
// Route::view('/login', 'pages.auth.login')->name('login');
// login admin
Route::get('admin/login',[LoginController::class, 'index'])->name('login');
Route::post('admin/login',[LoginController::class, 'auth'])->name('admin.login.auth');

Route::prefix('admin', )->group(function () {
    Route::get('/', function () {
        return view('pages.admin.dashboard');
    })->name('dashboard');

    Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::resource('data-bidans', DataBidanController::class);
Route::resource('data-bidan-schedules', DataBidanScheduleController::class);
Route::resource('data-users', DataUserController::class);
Route::resource('data-patients', DataPatientController::class);
Route::resource('data-rekam-medis', DataRekamMedisController::class);
});

Route::view('/','pages.bidan.dashboard');

// rekam medis
Route::get('patients', [BidanController::class, 'listPatients'])->name('patients');
Route::get('/patients/{id}/create-medical-record', [BidanController::class, 'createRekamMedis'])->name('bidan.createRekamMedis');
Route::post('/patients/{id}/store-medical-record', [BidanController::class, 'storeRekamMedis'])->name('bidan.storeRekamMedis');
Route::delete('/rekam-medis/{id}', [BidanController::class, 'destroyRekamMedis'])->name('bidan.destroyRekamMedis');
