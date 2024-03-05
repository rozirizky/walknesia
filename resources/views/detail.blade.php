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
  <div class="row">
    <div class="col-lg-6">
        <div class=" card mb-5 mt-1 border-0 rounded-0 ">

            <img src="{{ asset('/storage/images/'.$detail->gambar) }}" class="card-img-top " alt="..." style="height:240px; object-fit:cover; ">
            <div class="text-light lok1"><i class="bi bi-geo-alt-fill"></i>&nbsp;&nbsp;<span>Malang</span>
            </div>
            <div class="card-body">
                
                <h3 class="card-title">{{ $detail->tour }}</h3>
                <p > <i class="bi bi-cloud"></i>&nbsp;&nbsp;4 Hari</p>
<hr>
                <div class="row">
                    <div class="col-3">
                       
                      
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class=" card shadow mb-5 mt-1 border-0 rounded-4 p-5"style="background-color: #ebeaea;">
       
                <h4>Pilih Tanggal Tour</h4>
               <form action="/booking" method="post">
                <h4 class="mt-4">Tanggal Awal </h4>
                  <input type="date" class="form-control" name="tanggalawal">
                  <h4 class="mt-4">Tanggal Akhir</h4>
                  <input type="date" class="form-control" name="tanggalakhir">
                <h4 class="mt-4">Jumlah Peserta</h4>
                <p></p>
                <input type="number" class="form-control" name="peserta">
                <input type="hidden" value="{{ $detail->harga }}" name="harga">
              
              
     
        </div>
    </div>
    <h2>Deskripsi</h2>
    <p class="mt-3">{!! $detail->deskripsi !!}</p>
   
</div>
<div class="container mt-4">
    <h2>Ittenary</h2>
 
    @foreach ($itenary as $i)  
     <a class="btn itte mt-3 rounded-0 text-start text-danger"style="width:100%; font-size:18px;" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><span style="opacity: 0.6;color:#000;margin-right:20px;">{{ $i->waktu }}</span> {{ $i->itenary }} <i style="position: absolute; right:170px;  font-size:20px;font-weight: bolder;" class="bi bi-chevron-down"></i></a>
   
        <div class="collapse multi-collapse " id="multiCollapseExample1">
        <div class="card card-body border-0">
        {!! $i->deskripsi !!}  
        </div>
      </div>
    @endforeach
      
    
    
      </div>
    </div>
  </div>
</div>
    <section class=""style=" background-color: #ebeaea;">
        <div class="container mt-5 py-4">
            <h6 class="text-secondary">Harga Tour</h6>
            <h2>IDR {{ number_format($detail->harga) }}<span style="font-size:15px;opacity:0.7; ">/pax</span></h2>
        </div>
    </section>

    <div class="container mt-5 mb-5">
        <div class="card border-0 shadow px-5 py-1">
<h6><i class="bi bi-exclamation-circle-fill"></i>&nbsp;Syarat Dan Ketentuan</h6>
<p class="text-secondary">Dengan melakukan pemesanan maka anda menerima syarat dan ketetuan. Harap baca terlebih dahulu untuk memastikan</p>
        </div>
    </div>

    <nav class="navbar bg-body-tertiary sticky-bottom mt-5 p-4" style="margin-bottom:200px;">
        <div class="container">
          
        <button class="btn btn-dark" style="width:100%;" type="submit"><h5>Pesan</h5></button>
      <h6 class="mt-3 text-center" style="width:100%;">Hubungi WALKNESIA Travel Assistans</h6>
    </form>
        </div>
      </nav>
  @endsection