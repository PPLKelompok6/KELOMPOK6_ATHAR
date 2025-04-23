<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // atau model Pasien kamu
use App\Mail\ConsultationFollowUp;
use Illuminate\Support\Facades\Mail;

class ConsultationController extends Controller
{
    public function sendNotification(Request $request, $patientId)
    {
        $patient = User::findOrFail($patientId); // pastikan User ada atau ganti ke model pasien
        $notes = $request->input('notes');

        Mail::to($patient->email)->send(new ConsultationFollowUp($patient, $notes));

        return back()->with('success', 'Email notifikasi berhasil dikirim ke pasien!');
    }
}
