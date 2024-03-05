@extends('admin.template')


@section('container')


<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Forms</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route('tour.update',$tour->id) }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                  <label for="tour" class="form-label">Tour</label>
                  <input type="text" class="form-control @error('tour') is-invalid @enderror" id="tour" name="tour" value="{{ old('tour', $tour->tour) }}">
                  @error('tour')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                  
                </div>
                <div class="mb-3">
                  <label for="days" class="form-label">Days</label>
                  <input type="text" class="form-control @error('days') is-invalid @enderror" id="days" name="days" value="{{ old('days', $tour->days) }}">
                  @error('days')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">harga</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga', $tour->harga) }}">
                    @error('harga')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                  </div>
                  <div class="mb-3">
                    <label for="deskripsi" class="form-label">deskripsi</label>
                    <textarea  class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi">{{ old('deskripsi', $tour->deskripsi) }}</textarea>
                    @error('deskripsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                  </div>
                <div class="mb-3 ">
                    <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
                    @error('gambar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                </div>
                <button type="submit" class="btn btn-primary">UPDATE</button>
                <button type="reset" class="btn btn-danger">Reset</button>
              </form>
            </div>
          </div>
        
          
        </div>
      </div>
    </div>
  </div>

  @endsection

