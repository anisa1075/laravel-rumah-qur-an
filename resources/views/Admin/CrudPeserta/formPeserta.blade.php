
@extends('template.base')

@section('title', 'Form User Santri')

@section('content')
  

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="padding: 1rem; margin-top:1rem;">

                    <form action="{{ route('tambah.user.santri') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Santri</label>
                          <input type="text" class="form-control border" id="nama" name="nama" aria-describedby="emailHelp">
                          
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control border" id="email" name="email">
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">password</label>
                          <input type="password" class="form-control border" id="password" name="password">
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>

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
