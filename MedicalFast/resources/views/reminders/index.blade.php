@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="text-xl font-bold mb-4 text-center text-primary">📅 Daftar Pengingat Kesehatan</h3>

        <!-- Cek jika tidak ada pengingat yang pending -->
        @if($reminders->where('status', 'pending')->isEmpty())
            <div class="alert alert-info text-center">
                <strong>Info!</strong> Tidak ada pengingat yang menunggu untuk dikirim.
            </div>
        @else
            <div class="row">
                @foreach($reminders as $reminder)
                    @if($reminder->status === 'pending')
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm border-light rounded">
                                <div class="card-body">
                                    <!-- Judul Pengingat dan Tipe -->
                                    <h5 class="font-semibold text-lg">
                                        {{ $reminder->title }}
                                        <span class="badge bg-info text-dark">{{ ucfirst($reminder->type) }}</span>
                                    </h5>
                                    
                                    <!-- Deskripsi Pengingat -->
                                    <p class="mb-1 text-muted">{{ $reminder->description }}</p>
                                    
                                    <!-- Waktu Pengingat -->
                                    <p class="mb-2"><strong>Waktu:</strong> {{ \Carbon\Carbon::parse($reminder->reminder_time)->format('d M Y, H:i') }}</p>
                                    
                                    <!-- Tombol Aksi -->
                                    <div class="d-flex justify-content-between">
                                        <!-- Tombol Detail -->
                                        <a href="{{ route('reminders.show', $reminder->id) }}" class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                            <i class="bi bi-eye"></i> Detail
                                        </a>
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('reminders.edit', $reminder->id) }}" class="btn btn-sm btn-outline-warning" title="Edit Pengingat">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <!-- Tombol Hapus -->
                                        <form action="{{ route('reminders.destroy', $reminder->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus pengingat ini?')" title="Hapus Pengingat">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                        <!-- Tombol Kirim Email -->
                                        <form action="{{ route('reminders.sendEmail', $reminder->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-success" onclick="return confirm('Kirim Reminder ke email Pasien?')" title="Kirim Email Pengingat">
                                                <i class="bi bi-envelope"></i> Kirim Email
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
    </div>
@endsection
