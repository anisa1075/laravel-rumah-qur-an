@extends('template.base')
@section('title', 'Table Data Guru')

@section('content')



    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabel Data Guru</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
        </ol>
    </div>


    <div class="row">

        <div class="col-lg-12 mb-4" style="padding-bottom: 2rem">

            <!-- Alert Create-->
        @if(Session::get('Create'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ Session::get('Create') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </div>
        @endif
        <!-- End Alert Create -->
  
        {{-- Alert Update --}}
        @if(Session::get('Update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ Session::get('Update') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </div>
        @endif
        {{-- End Alert Update --}}
  
        {{-- Alert Delete --}}
        @if(Session::get('Delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ Session::get('Delete') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </div>
        @endif
        {{-- End Alert Delete --}}

        <div class="input-group input-group-sm mb-3" style="width: 250px; margin-left: 43rem;">
            {{-- <form action="#" method="get">
                <div class="input-group-append">
                    <input type="search" name="search" class="form-control float-right" placeholder="Search">
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form> --}}
        </div>
       
            <a class="btn btn-primary mb-3" href="{{ route('form.guru') }}" style="margin-top: -60px">Add Data Guru</a>
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th width="10%">Foto</th>
                                <th>Nama Guru</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guru as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $row->img) }}" alt="{{ $row->guru_id }}"
                                            class="img-fluid">
                                    </td>
                                    <td>{{ $row->guru->nama ?? ''}}</td>
                                    <td>{{ $row->kategori->nama_kategori ?? '' }}</td>
                                    <td>
                                        <a class="btn btn-secondary" href="{{ route('edit.guru', $row->id) }}"><i class="fa-solid fa-pen"></i></a>
                                        <a class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $row->id }}"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                @include('Admin.Guru.deleteGuru')
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>

@endsection
