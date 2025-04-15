<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReminderController;

Route::get('/', function () {
    return redirect()->route('reminders.index');
});
// Resource Route untuk Reminder (CRUD otomatis)
Route::resource('reminders', ReminderController::class);