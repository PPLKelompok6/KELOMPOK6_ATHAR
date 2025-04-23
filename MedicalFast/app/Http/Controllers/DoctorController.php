<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DoctorController extends Controller
{
    public function dashboard()
    {
        // Ambil data dokter yang sedang login
        $dokter = Auth::user();
        
        // Ambil daftar pasien yang berhubungan dengan dokter
        $pasienList = $dokter->patients;

        // Kirim data pasien ke view
        return view('doctor.dashboard', compact('pasienList'));
    }
}

