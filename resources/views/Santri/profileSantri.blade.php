@extends('template.base')

@section('title', 'Form Profile Santri')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Profile {{ Auth::user()->nama }}</h2>
                <div class="card mb-5" style="padding: 1rem; margin-top:1rem;">

                    <form action="{{ route('santri.update.santri', $dataSantri->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="santri_id" class="form-label">Nama Santri</label>
                            <input type="text" class="form-control border" id="santri_id" name="santri_id"
                                aria-describedby="emailHelp" value="{{ $dataSantri->santri->nama }}" disabled>

                        </div>

                        <div class="mb-3"> 
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control border" id="email" name="email" disabled
                                value="{{ $dataSantri->santri->email }}">
                        </div>

                        <div class="mb-3">
                            <label for="umur" class="form-label">Umur</label>
                            <input type="text" class="form-control border" id="umur" name="umur"
                                value="{{ $dataSantri->umur }}">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control border" id="alamat" name="alamat"
                                value="{{ $dataSantri->alamat }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select form-control" aria-label="Default select example" id="jenis_kelamin"
                                name="jenis_kelamin">
                                <option selected>{{ $dataSantri->jenis_kelamin }}</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="notelp" class="form-label">Nomor Telepon</label>
                            <input type="number" class="form-control border" id="notelp" name="notelp"
                                value="{{ $dataSantri->notelp }}">
                        </div>

                        <div class="mb-3">
                            <label for="ttl" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control border" id="ttl" name="ttl"
                                value="{{ $dataSantri->ttl  }}">
                        </div>

                        <div class="form-group">
                            <label for="img">Foto {{ Auth::user()->nama }}</label><br>
                            
                            <img style="width: 25%; margin-top: 1rem" src="{{ asset('storage/' . $dataSantri->img) }}" alt="{{ $dataSantri->santri_id }}"
                            class="img-fluid">
                            <div class="input-group">
                                <div class="custom-file">
                                    
                                    
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>

                    </form>

                </div>
            </div>
        </div>
    </div>




@endsection
