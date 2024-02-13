
@extends('template.base')

@section('title', 'Form Profile Guru')

@section('content')
  

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Profile {{ Auth::user()->nama }}</h2>
                <div class="card mb-5" style="padding: 1rem; margin-top:1rem;">

                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama</label>
                          <input type="text" class="form-control border" id="nama" name="nama" aria-describedby="emailHelp" value="{{ $guru->guru->nama }}" disabled>
                          
                        </div>

                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control border" id="email" name="email" disabled value="{{ $guru->guru->email }}">
                        </div>

                        <div class="mb-3">
                          <label for="kategori_id" class="form-label">Pengajar</label>
                          <input type="text" class="form-control border" id="kategori_id" name="kategori_id" disabled value="{{ $guru->kategori->nama_kategori }}">
                        </div>

                        <div class="form-group">
                            <label for="img" class="form-label">Foto {{ Auth::user()->nama }}</label><br/>
                            <img style="width: 25%;" src="{{ asset('storage/' . $guru->img) }}" alt="{{ $guru->guru_id }}"
                            class="img-fluid">
                            <div class="input-group">
                                <div class="custom-file ">
                                </div>
                            </div>
                        </div>
                       
                        {{-- <a href="{{ route('guru.profile.edit', $guru->id) }}" class="btn btn-primary">Update Foto</a> --}}

                      </form>
                      
                </div>
            </div>
        </div>
    </div>


    

@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

{{-- @section('ckEditor')

    <script>
        ClassicEditor
            .create(document.querySelector('#artikel'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection --}}
