@extends('admin.template')


@section('container')

<div class="container-fluid">
    
    <!--  Row 1 -->
    <div class="row">
      
            
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
         
          <div class="card-body p-4">
            <h3 class="card-title fw-semibold mb-3">Data Tour</h3>
            <a href="{{ route('tour.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
           
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">No</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Tour</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Days</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">kategori</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">harga</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">gambar</h6>
                      </th>
                      <th colspan="2"> </th>

                   
                  </tr>
                </thead>
                <tbody>

                    @forelse ($tour as $row)
                
                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">{{ $row->tour }}</h6>
                                               
                    </td>
                    <td class="border-bottom-0">
                    
                      <h6 class="fw-semibold mb-1">{{ $row->days }}</h6>
                                             
                  </td>
                  
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0 fs-4"> {!! $row->kategori->kategori !!} </h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">{{ $row->harga }}</h6>
                    </td>
                    <td class="border-bottom-0">
                        <img src="{{ asset('/storage/images/'.$row->gambar) }}" alt="gambar" width="50">
                      </td>
                      <td class="border-bottom-0">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('tour.destroy', $row->id) }}" method="POST">
                            
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                      
                      </td>
                      <td class="border-bottom-0">
                        <a href="{{ route('tour.edit', $row->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                      </td>
                   
                  </tr> 
                  @empty
                  <div class="alert alert-danger">
                      Data tour tidak ada.
                  </div>
                  @endforelse        
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     
    </div>
    
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
    </div>
  </div>
  <script>
    //message with toastr
    @if(session()->has('success'))
    
        toastr.success('{{ session('success') }}', 'BERHASIL!'); 

    @elseif(session()->has('error'))

        toastr.error('{{ session('error') }}', 'GAGAL!'); 
        
    @endif
</script>

@endsection