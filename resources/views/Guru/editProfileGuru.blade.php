
@extends('template.base')

@section('title', 'Form Edit Profile Guru')

@section('content')
  

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Profile {{ Auth::user()->nama }}</h2>
                <div class="card mb-5" style="padding: 1rem; margin-top:1rem;">

                    <form action="{{ route('guru.profile.update', $guru->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="img">Foto {{ Auth::user()->nama }}</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="img" class="custom-file-input" id="img">
                                    <label class="custom-file-label" for="img">Choose file</label>
                                </div>
                            </div>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Update Foto</button>

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
