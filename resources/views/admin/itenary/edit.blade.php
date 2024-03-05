@extends('admin.template')


@section('container')


<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Forms</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route('itenary.update',$itenary->id) }}" method="POST" >
                @method('put')
                @csrf
                <div class="mb-3">
                  <label for="waktu" class="form-label">waktu</label>
                 
                  <input type="text" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu', $itenary->waktu) }}">
                  @error('waktu')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                </div>
                <div class="mb-3">
                  <label for="itenary" class="form-label">itenary</label>
                  <input type="text" class="form-control @error('itenary') is-invalid @enderror" id="itenary" name="itenary" value="{{ old('itenary', $itenary->itenary) }}">
                  @error('itenary')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                </div>
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">deskripsi</label>
                  <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi">{{ old('deskripsi', $itenary->deskripsi) }}</textarea>
                  @error('deskripsi')
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

