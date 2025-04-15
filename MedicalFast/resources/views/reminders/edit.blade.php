@extends('layouts.app')

@section('content')
    <h3>Edit Pengingat</h3>
    <form method="POST" action="{{ route('reminders.update', $reminder->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $reminder->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control">{{ $reminder->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Waktu Pengingat</label>
            <input type="datetime-local" name="reminder_time" class="form-control" value="{{ \Carbon\Carbon::parse($reminder->reminder_time)->format('Y-m-d\TH:i') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis</label>
            <select name="type" class="form-select" required>
                <option value="obat" {{ $reminder->type == 'obat' ? 'selected' : '' }}>Minum Obat</option>
                <option value="tidur" {{ $reminder->type == 'tidur' ? 'selected' : '' }}>Tidur Tepat Waktu</option>
                <option value="konsultasi" {{ $reminder->type == 'konsultasi' ? 'selected' : '' }}>Konsultasi Dokter</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
