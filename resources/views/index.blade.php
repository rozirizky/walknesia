@extends('layouts.layouts')
@section('container')
    

  <header class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-body  shadow bg-primary "style="border-bottom:0.4px solid #c4c4c4;">
      <div class=" container-fluid">
        <a class="navbar-brand mx-4" href="/"><img src="image/logo.png" alt="" class="img-fluid" style="height:40px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form action="" class="dflex " >
          <div class="input-group border-0 rounded-4" >
            <span class="input-group-text  rounded-start-4 text-danger" id="basic-addon1"style="background-color: #f7f7f7;border:none;" ><i class="bi bi-search"></i></span>
            <input type="text" class="form-control rounded-end-4 " placeholder="Search Destination" aria-describedby="basic-addon1"style="background-color: #f7f7f7;border:none;">
          </div>
          </form>
        
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
            <li class="nav-item">
              <a class="nav-link  rounded-4 px-3  " href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link rounded-4 px-3   " href="/tour">Tour</a>
            </li>
            <li class="nav-item dropdown rounded-4 px-3  ">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Kategori
              </a>
              <ul class="dropdown-menu shadow-lg p-3">
         
                <li><a class="dropdown-item py-2 px-2" href="#">Pantai</a></li>
                <li><a class="dropdown-item py-2 px-2" href="#">Gunung</a></li>
                <li><a class="dropdown-item py-2 px-2" href="#">Candi</a></li>
                <li><a class="dropdown-item py-2 px-2" href="#"></a></li>
              </ul>
            </li>
            <li class="nav-item rounded-4 px-3  ">
              <a class="nav-link " href="/custom">Custom Trip</a>
            </li>
            <li class="nav-item rounded-4 px-3  ">
              <a class="nav-link " href="#">Promo</a>
            </li>
          </ul>
       
            @auth
            <form action="/logout" method="post">
              @csrf
            <button class="btn btn-danger mx-1 px-4 rounded-4" type="submit">Logout</button>
           

          </form>
            @else
            <a class="btn btn-danger mx-1 px-4 rounded-4" href="/login">Login</a>
            <a href="/register" class="btn btn-outline-danger mx-1 px-4 rounded-4" type="submit">Register</a>
            @endauth
          
      
            
           
 

          
        </div>
        
      </div>
  
    </nav>
    <nav class="navbar navbar-expand-lg bg-body">
  <div class="container dsn">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
  </div>
</nav>
    
  </header>

  <div class="crsl">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active bg-dark">
          <img src="../image/4.jpg" class="d-block w-100" alt="..."style="opacity:0.7;">
          <div class="carousel-caption  d-md-block " style="top:40%;">
          <h1>Your Journey Is Our Expertise</h1>
          <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item " style="background-color:#000;">
          <img src="../image/5.jpg" class="d-block w-100" alt="..."style="opacity:0.7;">
          <div class="carousel-caption  d-md-block " style="top:40%;">
          <h1>Your Journey Is Our Expertise</h1>
          <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item " style="background-color:#000;">
          <img src="../image/6.jpg" class="d-block w-100" alt="..."style="opacity:0.7;">
          <div class="carousel-caption  d-md-block " style="top:40%;">
          <h1>Your Journey Is Our Expertise</h1>
          <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item " style="background-color:#000;">
          <img src="../image/Amazing.jpg" class="d-block w-100" alt="..."style="opacity:0.7;">
          <div class="carousel-caption  d-md-block " style="top:40%;">
          <h1>Your Journey Is Our Expertise</h1>
          <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>



  <div class="container-fluid px-5 py-5 mt-5">
    <h2>PRODUK DAN LAYANAN KAMI</h2>
    <p>Rekomendasi pilihan produk dan layanan untuk perjalanan Anda</p>
    <div class="row mt-5">
      <div class="col-6 col-lg-4 col-sm-6 mt-3">
        <div class="card border-0 bg-dark mb-2 rounded-4">
          <img class="img-lyn rounded-4" src="../image/1.jpg" alt="">
          <h4 class="text-lyn">Tour</h4>
        </div>
      </div>
      <div class="col-6 col-lg-4 col-sm-6 mt-3">
        <div class="card border-0 bg-dark mb-2 rounded-4">
          <img class="img-lyn rounded-4" src="../image/pesawat.jpg" alt="">
          <h4 class="text-lyn">Tiket Pesawat</h4>
        </div>
      </div>
      <div class="col-6 col-lg-4 col-sm-6 mt-3">
        <div class="card border-0 bg-dark mb-2 rounded-4">
          <img class="img-lyn rounded-4" src="../image/hotel.jpg" alt="">
          <h4 class="text-lyn">Hotel</h4>
        </div>
      </div>
      

    </div>
  </div>


  

  

  <div class="container mt-5 mb-3">
    <div class="row">
      <div class="col-lg-4">
        <h2>INPIRASI DESTINASI LIBURAN</h2>
        <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores delectus nobis laboriosam consequatur,
          reiciendis vero. </P>
      </div>
      <div class="col-lg-4">
        <div class="card border-0 bg-dark mb-3 rounded-4">
          <img class="img-lyn rounded-4" src="../image/bali.jpg" alt="" style="height:150px;">
         
          <h4 class="text-lyn">BALI</h4>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card border-0 bg-dark mb-3 rounded-4">
          <img class="img-lyn rounded-4" src="../image/bromo.jpg" alt="" style="height:150px;">
          <h3 class="text-lyn">BROMO</h3>
        </div>
      </div>
    </div>
  </div>


  <div class="container-xl mb-5">
    <center>
      <h2 class="mt-5">LATEST TRAVEL POST</h2>
    </center>
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
  </div>





  <div class=" bg-danger py-5 mt-5">
    <center>
      <h2 class="text-light">TEMUKAN INSPIRASI UNTUK MENJELAJAH DUNIA</h2>
      <H6 class="text-light">Masukkan alamat e-mail Anda untuk mendapatkan informasi menarik seputar destinasi liburan
        terbaik serta promo terbaru kami.</H6>
      <div class="input-group mb-3 mt-5" style="width: 400px;">
        <input type="text" class="form-control" placeholder="Masukan Alamat Email" aria-label="Recipient's username"
          aria-describedby="button-addon2">
        <button class="btn btn-light" type="button" id="button-addon2">Kirim</button>
      </div>
    </center>
  </div>


  <div class="container mt-5 ">
    <h2 class="px-2">MENGAPA MEMILIH <br> WALKNESIA</h2>
    <div class="row">


      <div class="owl-carousel owl-theme mt-5">


        <div class="item card border-0 bg-dark">

          <img src="../image/1.jpg" class=" shadow " style="opacity: 0.7;height: 350px;" alt="...">
          <div class="why text-light">
            <h2>#1</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, doloremque fuga placeat consequatur,
              aperiam atque totam dolor voluptatibus, odio dolorum a corrupti iste molestias consectetur! Ea omnis
              consequatur aut quibusdam.</p>

          </div>
        </div>
      </div>
    </div>
  </div>

 





@endsection