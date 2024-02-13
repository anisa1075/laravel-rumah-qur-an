<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@extends('template.base')

@section('title', 'Form Kategori')

@section('content')
  

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="padding: 1rem; margin-top:1rem; margin-bottom: 12px">

                    <form action="{{ route('tambah.kategori') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="nama_kategori" class="form-label">Nama Kategori</label>
                          <input type="text" class="form-control border" id="nama_kategori" name="nama_kategori" aria-describedby="emailHelp">
                          
                        </div>
                        <div class="mb-3">
                          <label for="harga" class="form-label">Harga</label>
                          <input type="text" class="form-control border" id="harga" name="harga">
                        </div>
                        <div class="form-group mb-3">
                            <label for="guru_id" class="form-label">Nama Guru</label>
                            <select class="form-select" aria-label="Default select example" id="guru_id" name="guru_id">
                                <option selected>Pilih Nama Guru</option>
                                @foreach ($guru as $row)
                                <option value="{{ $row->id }}"
                                    {{ old('kategori') == $row->id ? 'selected' : '' }}>
                                    {{ $row->nama }}</option>
                                @endforeach
                              </select>
                        </div>
                        <div class="mb-3">
                          <label for="deskripsi" class="form-label">Deskripsi</label>
                          <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                        
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                      
                </div>
            </div>
        </div>
    </div>


    

@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@section('ckEditor')

    <script>
        ClassicEditor
            .create(document.querySelector('#deskripsi'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
