<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ItenaryController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',function(){
    return view('index');
});
Route::get('/tour',function(){
    return view('tour');
});

Route::get('/detail',function(){
    return view('detail');
});
Route::get('/custom',function(){
    return view('custom');
});


Route::get('/',[HomeController::class, 'tampil']);
Route::get('/tour',[HomeController::class, 'tampiltour']);
Route::get('/detail/{id}',[HomeController::class, 'show']);
Route::get('/login', [UserController::class,'login'])->name('login')->middleware('guest');
Route::get('/register', [UserController::class,'register'])->name('register')->middleware('guest');
Route::post('/login', [UserController::class,'authenticate']);
Route::post('/register', [UserController::class,'store']);
Route::post('/logout', [UserController::class,'logout']);

Route::get('/admin',function(){
    return view('admin.index');
})->middleware('auth');
Route::prefix('admin')->group(function () {
  
Route::resource(
    'kategori' , \App\Http\Controllers\KategoriController::class
  

);
Route::resource(
    'itenary' , \App\Http\Controllers\ItenaryController::class
  

);

 Route::resource(
        'tour' , \App\Http\Controllers\TourController::class
      
 );
 
Route::post('/itenary/tambah',[ItenaryController::class, 'tambah'])->name('itenary.tambah');
Route::get('/itenary/data/{id}',[ItenaryController::class,'data'])->name('itenary.data');
Route::get('/data-user',[UserController::class,'index'])->name('user.index');
Route::get('/data-user/{id}/edit',[UserController::class,'edit'])->name('user.edit');
    });

    Route::post('/booking', [BookingController::class,'store']);
    Route::get('/booking', [BookingController::class,'index']);







