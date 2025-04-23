<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MedFast - Health Reminder')</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-5">

    <!-- Navbar -->
    <header class="bg-light shadow-sm mb-4">
        <div class="container">
            <h1 class="mb-0 py-3">🩺 MedFast - Health Reminder</h1>
            <nav class="nav">
                <a href="{{ route('reminders.index') }}" class="nav-link">Daftar Pengingat</a>
                <a href="{{ route('reminders.create') }}" class="nav-link btn btn-primary">Tambah Pengingat</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} MedFast. Semua Hak Dilindungi.</p>
        </div>
    </footer>

    <!-- Include Bootstrap JS (optional for some features like dropdowns or modals) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
