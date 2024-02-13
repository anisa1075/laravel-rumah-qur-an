<a class="sidebar-brand d-flex align-items-center justify-content-center" style="background-color: white" href="{{asset('') }}index.html">
    <div class="sidebar-brand-icon">
      <img src="{{ asset('img/logo/logorq2.png') }}" width="100%">
    </div>
    <div class="sidebar-brand-text mx-3" style="color: black">RuangGuru</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item active">
    <a class="nav-link" href="{{route('index.home') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Features
  </div>
  <li class="nav-item">
      <a class="nav-link" href="{{ route('guru.kategori') }}">
        <i class="fa-solid fa-person-chalkboard"></i>
        <span>Kategori</span>
      </a>
  </li>
  
  <li class="nav-item">
      <a class="nav-link" href="{{ route('guru.list.santri') }}">
        <i class="fa-solid fa-users-rectangle"></i>
        <span>Data Santri</span>
      </a>
  </li>

  <li class="nav-item">
      <a class="nav-link" href="{{ route('guru.profile.guru') }}">
        <i class="fa-solid fa-user"></i>
        <span>Profile</span>
      </a>
  </li>
