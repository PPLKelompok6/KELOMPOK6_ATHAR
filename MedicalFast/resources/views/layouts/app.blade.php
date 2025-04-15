<!DOCTYPE html>
<html>
<head>
    <title>MedFast - Health Reminder</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-5">
    <div class="container">
        <h1 class="mb-4">🩺 MedFast - Health Reminder</h1>
        <nav class="mb-4">
            <a href="{{ route('reminders.index') }}" class="btn btn-outline-primary">Daftar Pengingat</a>
            <a href="{{ route('reminders.create') }}" class="btn btn-primary">Tambah Pengingat</a>
        </nav>
        <hr>
        @yield('content')
    </div>
</body>
</html>
