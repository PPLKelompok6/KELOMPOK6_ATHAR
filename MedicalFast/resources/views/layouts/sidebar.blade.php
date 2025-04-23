<!-- Sidebar -->
<div class="d-flex">
  <!-- Sidebar Menu -->
  <div class="bg-light border-end" style="width: 250px;">
    <div class="d-flex flex-column p-3">
      <h2 class="fs-4 fw-bold text-center mb-4">🩺 MedFast</h2>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('reminders.index') }}">
            Daftar Pengingat
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('reminders.create') }}">
            Tambah Pengingat
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Kontak</a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Main Content -->
  <div class="container-fluid p-5">
    @yield('content')
  </div>
</div>
