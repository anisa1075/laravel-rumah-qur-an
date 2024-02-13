@extends('template.base')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
  </ol>
</div>

<div class="row mb-3">
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Guru</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $guru }}</div>
           
          </div>
          <div class="col-auto">
            <i class="fa-solid fa-chalkboard-user text-primary fa-2x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Earnings (Annual) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Santri</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $santri }}</div>
           
          </div>
          <div class="col-auto">
            <i class="fa-solid fa-graduation-cap fa-2x text-success"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- New User Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-uppercase mb-1">Program</div>
            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $kategori }}</div>
          
          </div>
          <div class="col-auto">
            <i class="fa-solid fa-calendar fa-2x text-info"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-uppercase mb-1">Artikel</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $artikel }}</div>
          
          </div>
          <div class="col-auto">
            <i class="fa-solid fa-book-open-reader fa-2x text-warning"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Area Chart -->

  <!-- Pie Chart -->
 
  <!-- Invoice Example -->
 
  
  
</div>
@endsection