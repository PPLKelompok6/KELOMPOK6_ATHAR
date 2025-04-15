@extends('layouts.app')

@section('content')
    <h3>📅 Daftar Pengingat</h3>
    @foreach($reminders as $reminder)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $reminder->title }} <span class="badge bg-info text-dark">{{ ucfirst($reminder->type) }}</span></h5>
                <p>{{ $reminder->description }}</p>
                <p><strong>Waktu:</strong> {{ \Carbon\Carbon::parse($reminder->reminder_time)->format('d M Y, H:i') }}</p>
                <a href="{{ route('reminders.show', $reminder->id) }}" class="btn btn-sm btn-success">Detail</a>
                <a href="{{ route('reminders.edit', $reminder->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('reminders.destroy', $reminder->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus pengingat ini?')">Hapus</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
