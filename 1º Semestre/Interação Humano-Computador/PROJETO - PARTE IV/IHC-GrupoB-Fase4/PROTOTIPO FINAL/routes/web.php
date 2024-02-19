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

Route::get("/loading", function () {
    return view("mobileLoading");
});


Route::middleware('auth')->group(function () {
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/configuracoes', function () {
        return view("mobileConfig");
    });
    Route::get("/chat", function () {
        return view("mobileChat");
    });
    Route::get("/menu/reservaCompleted", function () {
        return view("successReservaMobile");
    });
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
        $toPay = [
            ["date" => "2023-12-31", "service" => "4ª Prestação de Propinas de CET's", "price" => 69.70],
            ["date" => "2024-01-31", "service" => "5ª Prestação de Propinas de CET's", "price" => 69.70],
            ["date" => "2024-02-29", "service" => "6ª Prestação de Propinas de CET's", "price" => 69.70],
            ["date" => "2024-03-31", "service" => "7ª Prestação de Propinas de CET's", "price" => 69.70],
            ["date" => "2024-04-30", "service" => "8ª Prestação de Propinas de CET's", "price" => 69.70]
        ];
        return view("mobilePagamentos", ["toPay" => $toPay]);
    });
    
    Route::get("/services", function () {
        return view("mobileServices");
    });
});

require __DIR__.'/auth.php';
