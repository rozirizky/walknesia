<?php

namespace App\Http\Controllers;


use App\Models\tour;
use App\Models\Itenary;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function tampil(){
        $tour = Tour::latest()->paginate(4);

        //render view with posts
        return view('index',compact('tour')) ;
    }
    public function tampiltour(){
        $tour = Tour::all();
        $tabel =  DB::table('tours')->count();

        
        return view('tour',compact('tour','tabel')) ;
    }
    public function show($id)
    {
        //get post by ID
        $detail = Tour::findOrFail($id);
        $itenary = Itenary::where('tour_id','=',$id)->get();

        //render view with post
        return view('detail', compact('detail','itenary'));
    }
   
}
