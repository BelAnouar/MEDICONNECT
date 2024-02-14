<?php

use App\Http\Controllers\appointmentController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpeciatieController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/rend', [appointmentController::class, 'index']);
Route::post('/rend', [appointmentController::class, 'store'])->name('appointment.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource("/medicine", MedicineController::class);
require __DIR__ . '/auth.php';



Route::get('/speciality', [SpeciatieController::class, "create"])->name("speciality.create");
Route::post('/speciality', [SpeciatieController::class, "store"])->name("speciality.store");
Route::put('/speciality/{specialitie}', [SpeciatieController::class, "update"])->name("speciality.update");
Route::delete('/speciality/{specialitie}', [SpeciatieController::class, "destroy"])->name("speciality.destroy");
