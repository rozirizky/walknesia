<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\View\View;
class BookingController extends Controller
{
    
    public function store(Request $request){
       
        $this->validate($request,[
            'awal' => "required|date:d/m/Y",
            'akhir' => "required|date:d/m/Y",
            'peserta' => 'required',
            'car' => 'required',
            'destinasi' => 'required',

        ]);
        $awal = strtotime($request->awal);
        $akhir = strtotime($request->akhir);
 
        
      $date = $akhir - $awal;
      $tanggal =  abs(round($date / 86400));
$harga = 20000;
$subtotal = $harga * $tanggal;
    booking::create([
        'users_id' => auth()->user()->id,
        'awal' => $request->awal,
        'akhir' => $request->akhir,
        'harga' => $harga,
        'durasi' => $tanggal,
        'destinasi' => $request->destinasi,
        'car' => $request->car,
        'peserta' => $request->peserta,
        'subtotal' => $subtotal,
        'status' => 'unpaid'
    ]);
    
// Set your Merchant Server Key
\Midtrans\Config::$serverKey = config('midtrans.server_key');
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

$params = array(
    'transaction_details' => array(
        'order_id' => auth()->user()->id,
        'gross_amount' => $subtotal,
    ),
    'customer_details' => array(
        'email' => auth()->user()->email,
        'phone' => '08111222333',
    ),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);
$id = auth()->user()->id;
$booking = booking::where('users_id',$id)->first();
return view('booking',compact('booking','snapToken'));
    
    }


}
