@extends('admin.template')


@section('container')

<div class="container-fluid">
    
    <!--  Row 1 -->
    <div class="row">
      
            
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
         
          <div class="card-body p-4">
            <h3 class="card-title fw-semibold mb-3">Data User</h3>
         
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">No</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Username</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Email</h6>
                    </th>
                   
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Password</h6>
                    </th>
                
                      <th colspan="2"> </th>

                   
                  </tr>
                </thead>
                <tbody>

                    @forelse ($user as $row)
                
                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">{{ $row->username }}</h6>
                                               
                    </td>
                    <td class="border-bottom-0">
                    
                      <h6 class="fw-semibold mb-1">{{ $row->email }}</h6>
                                             
                  </td>
                  
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0 fs-4"> {{ $row->password }} </h6>
                    </td>
                 
                      <td class="border-bottom-0">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.destroy', $row->id) }}" method="POST">
                            
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                      
                      </td>
                      <td class="border-bottom-0">
                        <a href="{{ route('user.edit', $row->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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