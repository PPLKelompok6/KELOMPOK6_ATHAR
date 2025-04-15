@extends('layouts.app')

@section('content')
    <h3>Tambah Pengingat</h3>
    <form method="POST" action="{{ route('reminders.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Waktu Pengingat</label>
            <input type="datetime-local" name="reminder_time" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis</label>
            <select name="type" class="form-select" required>
                <option value="obat">Minum Obat</option>
                <option value="tidur">Tidur Tepat Waktu</option>
                <option value="konsultasi">Konsultasi Dokter</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
