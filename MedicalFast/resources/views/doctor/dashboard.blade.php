<!-- resources/views/dashboard-doctor.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Title of the page -->
        <h2 class="mb-4">Daftar Pasien Anda</h2>
        
        <!-- Button to add new patient or navigate to other sections -->
        <div class="mb-4">
            <a href="{{ route('patients.create') }}" class="btn btn-primary">Tambah Pasien Baru</a>
        </div>

        <!-- Patient List Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Pasien</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasienList as $key => $pasien)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $pasien->name }}</td>
                        <td>{{ $pasien->email }}</td>
                        <td>{{ $pasien->phone_number }}</td>
                        <td>{{ $pasien->address }}</td>
                        <td>
                            <a href="{{ route('patients.show', $pasien->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('patients.edit', $pasien->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('patients.destroy', $pasien->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus pasien ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
