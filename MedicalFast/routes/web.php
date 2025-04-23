<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DoctorController;

Route::get('/', function () {
    return redirect()->route('reminders.index');
});

Route::get('/', function () {
    return view('home');
});

// Resource Route untuk Reminder (CRUD otomatis)
Route::resource('reminders', ReminderController::class);

Route::post('/reminders/{id}/send-email', [ReminderController::class, 'sendManual'])->name('reminders.sendEmail');

Route::middleware(['auth'])->group(function () {
    Route::get('/doctor/dashboard', [DoctorController::class, 'dashboard'])->name('doctor.dashboard');
});
