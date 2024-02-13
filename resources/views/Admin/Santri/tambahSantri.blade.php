<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@extends('template.base')

@section('title', 'Form Data Santri')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="padding: 1rem; margin-top:1rem;">



                    <form action="{{ route('tambah.santri') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="img">Foto Santri</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="img" class="custom-file-input" id="img">
                                    <label class="custom-file-label" for="img">Choose file</label>
                                </div>
                            </div>
                        </div>

                       

                        <div class="form-group mb-3">
                            <label for="santri_id" class="form-label">Nama Santri</label>
                            <select class="form-select" aria-label="Default select example" id="santri_id"
                                name="santri_id">
                                <option selected>Pilih Nama Santri</option>
                                @foreach ($santri as $row)
                                    <option value="{{ $row->id }}" {{ old('guru') == $row->id ? 'selected' : '' }}>
                                        {{ $row->nama }}</option>
                                @endforeach
                                    
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="kategori_id" class="form-label">Kategori</label>
                            <select class="form-select" aria-label="Default select example" id="kategori_id"
                                name="kategori_id">
                                <option selected>Pilih Kategori</option>
                                @foreach ($kategori as $row)
                                    <option value="{{ $row->id }}" {{ old('guru') == $row->id ? 'selected' : '' }}>
                                        {{ $row->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="guru_id" class="form-label">Nama Guru</label>
                            <select class="form-select" aria-label="Default select example" id="guru_id"
                                name="guru_id">
                                <option selected>Pilih Nama Guru</option>
                                @foreach ($guru as $row)
                                    <option value="{{ $row->id }}" {{ old('guru') == $row->id ? 'selected' : '' }}>
                                        {{ $row->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>




@endsection


