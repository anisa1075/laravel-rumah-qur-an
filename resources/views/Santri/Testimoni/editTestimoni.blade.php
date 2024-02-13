<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@extends('template.base')

@section('title', 'Form Edit Testimoni')

@section('content')
  

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="padding: 1rem; margin-top:1rem;">

                  

                    <form action="{{ route('santri.update.testimoni', $testimoni->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                          <label for="deskripsi" class="form-label">Deskripsi</label>
                          <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Enter ..."
                                value="{{  $testimoni->deskripsi  }}">{{  $testimoni->deskripsi  }}</textarea>
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
