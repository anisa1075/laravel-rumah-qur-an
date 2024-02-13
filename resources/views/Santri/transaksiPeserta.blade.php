@extends('template.base')
@section('title', 'Table Transaksi')
    
@section('content')
    


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tabel Transaksi</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item">Tabel Transaksi</li>
        <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
      </ol>
    </div>

    
    <div class="row">
        
      <div class="col-lg-12 mb-4">

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
       
        
        <!-- Simple Tables -->
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Transaksi</h6>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>No.</th>
                  <th>Kode Transaksi</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Nama Kategori</th>
                  <th>Total Harga</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($transaksi as $row)
                    
                
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->kode_transaksi }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->nama_kategori }}</td>
                    <td>{{ $row->total_harga }}</td>
                    <td>
                        @if ($row->status == 1)
                            <span class="badge badge-success">Sukses</span>
                        @elseif($row->status == 2)
                            <span class="badge badge-warning">Pending</span>
                        @elseif($row->status == 3)
                            <span class="badge badge-danger">Gagal</span>
                        @endif
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer"></div>
        </div>
      </div>
    </div>

@endsection