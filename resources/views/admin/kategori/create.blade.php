@extends('admin.template')


@section('container')


<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Forms</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route('kategori.store') }}" method="POST" >
                @csrf
                <div class="mb-3">
                  <label for="kategori" class="form-label">kategori</label>
                  <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori">
                  @error('kategori')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                </div>
                  
             
             
           
               
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
              </form>
            </div>
          </div>
        
          
        </div>
      </div>
    </div>
  </div>

  @endsection

