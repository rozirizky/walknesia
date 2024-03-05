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

<div class="container mt-5 p-5">
    <div class=" card shadow mb-5 mt-1 border-0 rounded-4 p-5">
      
         
            <h2 class="mt-4 ">Booking</h2>
           <hr>
            <div class="row">
               <div class="col-lg-6">
                <h4 class="mt-4">Nama</h4>
                <h5 class="text-secondary">{{ $booking->users->name }}</h5>
            </div>
            <div class="col-lg-6">
             <h4 class="mt-4">Jumlah Peserta</h4>
             <h5 class="text-secondary">{{ $booking->peserta  }} <span>orang</span></h5>
            
             </div>
            <div class="col-lg-6">
                 <h4 class="mt-4">Tanggal awal</h4>
          
                 <h5 class="text-secondary">{{ $booking->awal }}</h5>
                </div>
            <div class="col-lg-6">
                <h4 class="mt-4">Tanggal akhir</h4>
         
           <h5 class="text-secondary">{{ $booking->akhir }}</h5>
           </div>
          
           <div class="col-lg-6">
             <h4 class="mt-4">Durasi</h4>
           
           <h5 class="text-secondary">{{ $booking->durasi }} <span>hari</span> </h5>
            </div>
           <div class="col-lg-6">
            
            <h4 class="mt-4">Destinasi</h4>
           
            <h5 class="text-secondary">{{ $booking->destinasi }}</h5>
            </div>
            <div class="col-lg-6">
                <h4 class="mt-4">Harga</h4>
           
            <h5 class="text-secondary"><span>Rp.</span>{{ $booking->harga }}</h5>
            </div>
            <div class="col-lg-6">
                <h4 class="mt-4">Subtotal</h4>
           
            <h5 class="text-secondary"><span>Rp.</span>{{ $booking->subtotal }}</h5>
            </div>
           </div>
          

         <hr>
           
            <div class=" text-danger mt-3">
                <h6><i class="bi bi-exclamation-circle-fill "></i>&nbsp;Syarat Dan Ketentuan</h6>
                <p class="text-secondary">Dengan melakukan pemesanan maka anda menerima syarat dan ketetuan. Harap baca terlebih dahulu untuk memastikan</p>
                        </div>
                        <button class="btn btn-dark" id="pay-button" style="width:100%;"><h5>Pesan</h5></button>
                        <h6 class="mt-3 text-center" style="width:100%;">Hubungi WALKNESIA Travel Assistans</h6>
                    </div>
                
    </div>
</div>
           
                
       
       
      
  
        </div>
      </nav>
      <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{ $snapToken }}', {
            onSuccess: function(result){
              /* You may add your own implementation here */
              alert("payment success!"); console.log(result);
            },
            onPending: function(result){
              /* You may add your own implementation here */
              alert("wating your payment!"); console.log(result);
            },
            onError: function(result){
              /* You may add your own implementation here */
              alert("payment failed!"); console.log(result);
            },
            onClose: function(){
              /* You may add your own implementation here */
              alert('you closed the popup without finishing the payment');
            }
          })
        });
      </script>
  @endsection