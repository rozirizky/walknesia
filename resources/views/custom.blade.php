@extends('layouts.layouts')
@section('container')
    
<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/"><i class="bi bi-arrow-left"></i></a>
    </div>
  </nav>
  

<style>

    .itte:hover{
        background-color: #f1f1f1d5;
    }
    .itte:active{
        border: none;
    }
    .itte:focus{
        border: none;
    }
</style>



  <div class="container" style="margin-top:100px; ">

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
  <div class="row">
   
    <div class="col-lg-12">
        <div class=" card shadow mb-5 mt-1 border-0 rounded-4 p-5">
            <form action="/booking" method="POST"> 
              @csrf
                <h4 class="mt-4">Pilih Tanggal Tour</h4>
                <h4 class="mt-4">Tanggal awal</h4>
                <input type="date" class="form-control" name="awal" >
               
                <h4 class="mt-4">Tanggal akhir</h4>
              
                <input type="date" class="form-control" name="akhir" >
                <h4 class="mt-4">Destinasi</h4>
               
                <select name="destinasi" id="" class="form-control">
                  <option value="" >Pilih Destinasi</option>
                <option value="Bromo">Bromo</option>
                <option value="Tumpak Sewu">Tumpak Sewu</option>
                <option value="Jatim Park">Jatim Park</option>
              </select>
              <h4 class="mt-4">Mobil</h4>
               
              <select name="car" id="" class="form-control">
                <option value="" >Pilih Jenis Mobil</option>
              <option value="family car">family car</option>
              <option value="premium car">premium car</option>
              <option value="luxury car">luxury car</option>
            </select>
                <h4 class="mt-4">Jumlah Peserta</h4>
                
                <input type="text" class="form-control" name="peserta">
                
            
        </div>
    </div>
   
   
    <ul>
   
</ul>
</div>

  </div>
</div>
  

    <div class="container mt-5 mb-5">
        <div class="card border-0 shadow px-5 py-1">
<h6><i class="bi bi-exclamation-circle-fill"></i>&nbsp;Syarat Dan Ketentuan</h6>
<p class="text-secondary">Dengan melakukan pemesanan maka anda menerima syarat dan ketetuan. Harap baca terlebih dahulu untuk memastikan</p>
        </div>
    </div>

    <nav class="navbar bg-body-tertiary sticky-bottom mt-5 p-4" style="margin-bottom:200px;">
        <div class="container">
          @auth
          <button class="btn btn-dark" style="width:100%;"><h5>Pesan</h5></button>
              @else
              <a href="/login" class="btn btn-dark" style="width:100%;" ><h5>Pesan</h5></a>
          @endauth
       
      <h6 class="mt-3 text-center" style="width:100%;">Hubungi WALKNESIA Travel Assistans</h6>
    </form>
        </div>
      </nav>
  @endsection