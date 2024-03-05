@extends('admin.template')


@section('container')

<div class="container-fluid">

  <div class="container ">

  
  <form action="{{ route('itenary.store') }}" method="post">
    @csrf
    <div class="row">

      <div class="col-lg-8">
        
          <select name="tour" class="form-select form-select-lg">
            <option value="" selected> pilih tour</option>
            @foreach ($tour as $t)
            <option value="{{ $t->id }}">{{ $t->tour }}</option>
            @endforeach
           
          </select>
         
       
      </div>
      <div class="col-lg-4">
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
      </div>
    </div>
  </form>
</div>



    
@isset($id)

    

    <!--  Row 1 -->
    <div class="row">
    
      
            
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Itenary</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">No</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Waktu</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Itenary</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">deskripsi</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">tour</h6>
                    </th>
                    
                      <th colspan="2"> </th>

                   
                  </tr>
                </thead>
                <tbody>

                    @forelse ($itenary as $row)
                
                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">{{ $row->waktu }}</h6>
                                               
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">{{ $row->itenary }}</h6>
                                             
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">{!! $row->deskripsi !!}</h6>
                                           
                </td>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-1">{{ $row->tour->tour }}</h6>
                                         
              </td>
                
                 
                      <td class="border-bottom-0">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('itenary.destroy', $row->id) }}" method="POST">
                            
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $row->tour->id }}">
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form> 
                      
                      </td>
                      <td class="border-bottom-0">
                        <a href="{{ route('itenary.edit', $row->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                      </td>
                   
                  </tr> 
                  @empty
                  <div class="alert alert-danger">
                      Itenary not found
                  </div>
                  @endforelse        
                </tbody>
              </table>
              <a href="{{ route('itenary.show',$id) }}" class="btn btn-primary">Tambah Itenary</a>
            </div>
          </div>
        </div>
      </div>
    </div>
        
@endisset

    
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