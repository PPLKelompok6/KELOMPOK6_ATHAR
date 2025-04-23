<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedFast - Platform Kesehatan Anda</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800 font-sans">

    <!-- Navbar -->
    <header class="bg-blue-600 text-white shadow">
        <div class="container mx-auto flex justify-between items-center p-4 px-6">
            <h1 class="text-2xl font-bold">MedFast</h1>
            <nav class="space-x-6">
                <a href="#" class="hover:underline">Beranda</a>
                <a href="#layanan" class="hover:underline">Layanan</a>
                <a href="#tentang" class="hover:underline">Tentang</a>
                <a href="#kontak" class="hover:underline">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gray-50 py-20">
        <div class="container mx-auto px-6 flex flex-col-reverse md:flex-row items-center justify-between">
            <div class="md:w-1/2">
                <h2 class="text-4xl md:text-5xl font-bold leading-tight mb-4">
                    Solusi Kesehatan Cepat & Praktis
                </h2>
                <p class="text-lg mb-6 text-gray-700">
                    Kelola pengingat minum obat, jadwal konsultasi, dan rutinitas kesehatanmu dengan mudah bersama MedFast.
                </p>
                <a href="{{ route('reminders.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg shadow">
                    Coba Sekarang
                </a>
            </div>
            <div class="md:w-1/2 mb-10 md:mb-0">
                <img src="{{ asset('images/hero-doctor.png') }}" alt="Ilustrasi Medis" class="w-full max-w-md mx-auto">
            </div>
        </div>
    </section>

    <!-- Layanan -->
    <section id="layanan" class="py-20 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-12">Layanan Unggulan</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 border rounded-lg shadow-sm hover:shadow-md transition">
                    <h4 class="text-xl font-semibold mb-2">💊 Pengingat Obat</h4>
                    <p class="text-gray-600">Atur pengingat obat agar tidak lupa minum obat sesuai anjuran dokter.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-sm hover:shadow-md transition">
                    <h4 class="text-xl font-semibold mb-2">🛌 Pola Tidur Sehat</h4>
                    <p class="text-gray-600">Dapatkan notifikasi untuk tidur tepat waktu dan menjaga ritme istirahat.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-sm hover:shadow-md transition">
                    <h4 class="text-xl font-semibold mb-2">👨‍⚕️ Jadwal Konsultasi</h4>
                    <p class="text-gray-600">Ingatkan kamu akan janji temu konsultasi dengan dokter.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang -->
    <section id="tentang" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-4">Tentang MedFast</h3>
            <p class="text-gray-600 max-w-2xl mx-auto">
                MedFast adalah platform digital yang dirancang untuk membantu masyarakat Indonesia dalam menjaga kesehatan secara mandiri dan modern melalui sistem pengingat otomatis berbasis web.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="bg-blue-600 text-white py-6 mt-20">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; {{ date('Y') }} MedFast. Dibuat dengan ❤️ untuk kesehatan Anda.</p>
        </div>
    </footer>

</body>
</html>
