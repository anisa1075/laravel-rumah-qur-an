<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@extends('template.base')

@section('title', 'Form Edit Kategori')

@section('content')
  

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3" style="padding: 1rem; margin-top:1rem;">

                    <form action="{{ route('update.kategori', $kategori->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="nama_kategori" class="form-label">Nama Kategori</label>
                          <input type="text" class="form-control border" id="nama_kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}" aria-describedby="emailHelp">
                          
                        </div>
                        <div class="mb-3">
                          <label for="harga" class="form-label">Harga</label>
                          <input type="text" class="form-control border" id="harga" name="harga" value="{{ $kategori->harga }}">
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="guru_id" class="form-label">Nama Guru</label>
                            <select class="form-select" aria-label="Default select example" id="guru_id" name="guru_id">
                                <option value="{{ $kategori->guru_id }}">{{ $kategori->guru->nama }}</option>
                                @foreach ($guru as $row)
                                <option value="{{ $row->id }}"
                                    {{ old('tags') == $row->id ? 'selected' : '' }}>{{ $row->nama }}</option>
                                @endforeach
                              </select>
                        </div>

                        <div class="mb-3">
                          <label for="deskripsi" class="form-label">Deskripsi</label>
                          <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Enter ..."
                                value="{{  $kategori->deskripsi  }}">{{  $kategori->deskripsi  }}</textarea>
                        </div>
                        
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                      
                </div>
            </div>
        </div>
    </div>


    

@endsection
@section('ckEditor')

    <script>
        ClassicEditor
            .create(document.querySelector('#deskripsi'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
