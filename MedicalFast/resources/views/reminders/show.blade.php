@extends('layouts.app')

@section('content')
    <h3>Detail Pengingat</h3>
    <p><strong>Judul:</strong> {{ $reminder->title }}</p>
    <p><strong>Deskripsi:</strong> {{ $reminder->description }}</p>
    <p><strong>Waktu:</strong> {{ \Carbon\Carbon::parse($reminder->reminder_time)->format('d M Y, H:i') }}</p>
    <p><strong>Jenis:</strong> {{ ucfirst($reminder->type) }}</p>

    <a href="{{ route('reminders.edit', $reminder->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('reminders.destroy', $reminder->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" onclick="return confirm('Hapus pengingat ini?')">Hapus</button>
    </form>
@endsection
