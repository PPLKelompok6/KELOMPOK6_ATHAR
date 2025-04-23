<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReminderManualNotification;
use Illuminate\Support\Facades\Log;

class ReminderController extends Controller
{
    public function index()
    {
        $reminders = Reminder::all();
        return view('reminders.index', compact('reminders'));
    }

    public function create()
    {
        return view('reminders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'reminder_time' => 'required|date',
            'type' => 'required|in:obat,tidur,konsultasi',
        ]);

        Reminder::create($validated);
        return redirect()->route('reminders.index')->with('success', 'Reminder berhasil dibuat!');
    }

    public function show(Reminder $reminder)
    {
        return view('reminders.show', compact('reminder'));
    }

    public function edit(Reminder $reminder)
    {
        return view('reminders.edit', compact('reminder'));
    }

    public function update(Request $request, Reminder $reminder)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'reminder_time' => 'required|date',
            'type' => 'required|in:obat,tidur,konsultasi',
        ]);

        $reminder->update($validated);
        return redirect()->route('reminders.index')->with('success', 'Reminder berhasil diperbarui!');
    }

    /**
     * Kirim email pengingat ke pasien berdasarkan reminder.
     */
    public function sendManual($id)
    {
        $reminder = Reminder::findOrFail($id);

        $patient = User::where('role', 'pasien')->first();
    
        if (!$patient || !$patient->email) {
            return back()->with('error', 'Pasien tidak ditemukan atau belum memiliki email.');
        }
    
        Log::info('Email akan dikirim ke: ' . $patient->email); // Log email yang akan dikirim
        try {
            Mail::to($patient->email)->send(new ReminderManualNotification($reminder));
            return back()->with('success', 'Email pengingat berhasil dikirim!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengirim email: ' . $e->getMessage());
        }
    }

    public function destroy(Reminder $reminder)
    {
        $reminder->delete();
        return redirect()->route('reminders.index')->with('success', 'Reminder berhasil dihapus!');
    }
}
