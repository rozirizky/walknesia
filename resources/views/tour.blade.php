@extends('layouts.layouts')
@section('container')
    
    <header>
        <nav class=" fixed-top shadow-lg " style="background-image: url('../image/fullimage1.jpg');background-repeat: no-repeat;background-size: cover; border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;">
            <div class=" container"><br>
                <a class=" text-light fw-bold py-5" href="/">
                    <h2 class="text-light"><i class="bi bi-arrow-left"></i></h2>
                </a><br>
                <h1 class="text-light mb-3"> Tour</h1>
                <h4 class="text-light mb-5">Temukan liburan Terbaik Anda Disini</h4>

        </nav>
    </header>





    <div class="container" style="margin-top: 270px;">
        <button class="rounded-pill btn btn-outline-dark px-5 src"
            style="padding-top: 10px; width: 100%; text-align: left;">
            <h6><i class="bi bi-search"></i>&nbsp;&nbsp;&nbsp;&nbsp;Liburan Kemana ?</h6>
        </button>
        <div class="row mt-5 px-5">
            <h6 class="">Pilih Destinasi</h6>
            <div class="owl-carousel owl-theme mt-4 ">


                <div class="item card border-0 bg-dark mb-5">
                    <img src="../image/bali.jpg" class=" shadow " style="opacity: 0.9;" alt="...">
                    <h5 style="position:absolute;color:#fff;bottom:20px;left:20px">Bali</h5>
                </div>
                <div class="item card border-0 bg-dark mb-5">
                    <img src="../image/bromo.jpg" class=" shadow " style="opacity: 0.9;" alt="...">
                    <h5 style="position:absolute;color:#fff;bottom:20px;left:20px">Jawa Timur</h5>
                </div>
                <div class="item card border-0 bg-dark mb-5">
                    <img src="../image/br.jpg" class=" shadow " style="opacity: 0.9;" alt="...">
                    <h5 style="position:absolute;color:#fff;bottom:20px;left:20px">Jogja</h5>
                </div>
               
            </div>
        </div>
       
    </div>
    <section class="shadow"style="padding-bottom:100px; background-color: #ebeaea;">
        <div class="container p-5">
            <div class="row">
                <div class="col-6">
                    <p>{{ $tabel }} Tour Tersedia</p>
                </div>
              

            </div>

           

            <div class="row">
                @foreach ($tour as $row)
                    
              
                <div class="col-lg-4">
                    <div class=" card shadow mb-5 mt-1 border-0 rounded-4 ">

                        <img src="{{ asset('/storage/images/'.$row->gambar) }}" class="card-img-top " alt="..." style="height:200px; object-fit:cover; border-top-left-radius:15px;
                        border-top-right-radius:15px;">
                        <div class="text-light lok"><i class="bi bi-geo-alt-fill"></i>&nbsp;&nbsp;<span>Malang</span>
                        </div>
                        <div class="card-body">
                           
                            <h5 class="card-title">{{ $row->tour }}</h5>

                            <div class="row">
                                <div class="col-3">
                                    <p class="card-text mt-3"> <i class="bi bi-cloud"></i>&nbsp;&nbsp;{{ $row->days }} Days</p>

                                </div>
                             
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="card-text text-secondary mt-3">Mulai Dari <br><span class="text-warning " style="font-size: 19px;">IDR {{ number_format($row->harga) }}</span></p>
                                    

                                </div>
                                <div class="col-6">
                                    <a class="nav-link ld"  href="detail/{{ $row->id  }}">Lihat Detail<i class="bi bi-arrow-right "></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
              
            </div>
        </div>
    </section>
  @endsection