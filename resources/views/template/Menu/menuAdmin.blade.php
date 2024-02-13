<a class="sidebar-brand d-flex align-items-center justify-content-center" style="background-color: white" href="{{ asset('') }}index.html">
    <div class="sidebar-brand-icon">
        <img src="{{ asset('img/logo/logorq2.png') }}" width="100%">
    </div>
    <div class="sidebar-brand-text mx-3" style="color: black" >RuangAdmin</div>
</a>
<hr class="sidebar-divider my-0">
<li class="nav-item active">
    <a class="nav-link" href="{{ route('index.home') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
<hr class="sidebar-divider">
<div class="sidebar-heading">
    Features
</div>
<li class="nav-item">
    <a class="nav-link" href="{{ route('index.kategori') }}">
        <i class="fa-solid fa-person-chalkboard"></i>
        <span>Kategori</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('index.artikel') }}">
        <i class="fa-solid fa-newspaper"></i>
        <span>Artikel</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('index.testimoni') }}">
        <i class="fa-regular fa-comment"></i>
        <span>Testimoni</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('index.kelas') }}">
        <i class="fa-solid fa-users-rectangle"></i>
        <span>Data Santri</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('index.guru') }}">
        <i class="fa-solid fa-users-rectangle"></i>
        <span>Data Guru</span>
    </a>
</li>

{{-- <li class="nav-item">
    <a class="nav-link" href="{{ route('index.transaksi') }}">
        <i class="fa-solid fa-money-check-dollar"></i>
        <span>Transaksi</span>
    </a>
</li> --}}

<li class="nav-item">
    <a class="nav-link" href="{{ route('index.chart') }}">
        <i class="fa-solid fa-chart-simple"></i>
        <span>Chart</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
        aria-controls="collapseForm">
        <i class="fa-solid fa-users"></i>
        <span>User</span>
    </a>
    <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Forms</h6>
            <a class="collapse-item" href="{{ route('index.user.guru') }}">Guru</a>
            <a class="collapse-item" href="{{ route('index.user.santri') }}">Santri</a>
        </div>
    </div>
</li>
