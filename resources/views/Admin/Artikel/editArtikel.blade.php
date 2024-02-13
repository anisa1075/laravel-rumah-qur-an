<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@extends('template.base')

@section('title', 'Form Kategori')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mb-5" style="padding: 1rem; margin-top:1rem;">



                    <form action="{{ route('update.artikel', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="img">Image Artikel</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="img" class="custom-file-input" id="img">
                                    <label class="custom-file-label" for="img">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control border" id="judul" name="judul"
                                aria-describedby="emailHelp" value="{{ $artikel->judul }}">

                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" class="form-control border" id="author" name="author"
                                value="{{ $artikel->author }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="kategori_id" class="form-label">Kategori Artikel</label>
                            <select class="form-select" aria-label="Default select example" id="kategori_id"
                                name="kategori_id">
                                <option selected>{{ $artikel->kategori->nama_kategori }}</option>
                                @foreach ($kategori as $row)
                                    <option value="{{ $row->id }}" {{ old('kategori') == $row->id ? 'selected' : '' }}>
                                        {{ $row->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Enter ..."
                                value="{!! $artikel->deskripsi !!}">{!! $artikel->deskripsi !!}</textarea>
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
