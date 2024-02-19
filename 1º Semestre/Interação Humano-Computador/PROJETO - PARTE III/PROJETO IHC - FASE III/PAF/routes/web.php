<?php

use App\Http\Controllers\ProfileController;
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


Route::get("/", function () {
    return view("mobileHome");
});


Route::get("/notification", function () {
    return view("mobileNotification");
});

Route::get("/horario", function () {
    return view("mobileHorario");
});

Route::get("/horario/event", function () {
    return view("mobileHorarioEvent");
});

Route::get("/horario/submitEvent", function () {
    return view("mobileHorarioEventSubmit");
});

Route::get("/card", function () {
    return view("mobileCard");
});

Route::get("/menu", function () {
    return view("mobileMenu");
});

Route::get("/pagamentos", function () {
    return view("mobilePagamentos");
});

Route::get("/services", function () {
    return view("mobileServices");
});

Route::get("/menu/reservaCompleted", function () {
    return view("successReservaMobile");
});

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::get('/profile/configuracoes', function () {
    return view("mobileConfig");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
