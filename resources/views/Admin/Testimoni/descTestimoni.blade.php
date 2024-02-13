<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@extends('template.base')

@section('title', 'Deskripsi Kategori')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card" style="padding: 1rem; margin-top:1rem;">

                <form action="#" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                      <label for="deskripsi" class="form-label">Deskripsi</label>
                      <div class="card" style="padding-left: 10px">
                        <p class="mt-3">{!! $testimoni->deskripsi !!}</p>
                    </div>
                    </div>
                    
                   
                    
                  </form>
                  
            </div>
        </div>
    </div>
</div>


    <!-- End Main Content -->

@endsection


