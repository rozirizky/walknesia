<?php

namespace App\Http\Controllers;

use App\Models\tour;
use App\Models\itenary;
use Illuminate\Http\Request;


use Symfony\Component\Routing\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UpdateitenaryRequest;
use Illuminate\Http\RedirectResponse;

class ItenaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $tour = tour::all();
      
        
        return view('admin.itenary.index',compact('tour'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah(Request $request)
    {
       
 $this->validate($request,[
        'itenary' => 'required',
        'waktu' => 'required',
        'deskripsi' => 'required',
       

       ]);

       itenary::create([
        'tour_id' => $request->id,
        'itenary' => $request->itenary,
        'waktu' => $request->waktu,
        'deskripsi' => $request->deskripsi,

       ]);

       $id= $request->id;
    
       
      return redirect()->route('itenary.data',$id);

    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function store(Request $request)
{
   
   
    $id = $request->tour ;
 

return redirect()->route('itenary.data',$id);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $itenary = itenary::findOrFail($id);
      

        return view('admin.itenary.edit',compact('itenary'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $this->validate($request,[
            'itenary' => 'required',
            'waktu' => 'required',
            'deskripsi' => 'required',
           
    
           ]);
           $itenary = itenary::findOrFail($id);
           $idt = $itenary->tour->id;
           
    
           $itenary->update([
          
            'itenary' => $request->itenary,
            'waktu' => $request->waktu,
            'deskripsi' => $request->deskripsi,
    
           ]);
          

           return redirect()->route('itenary.data',$idt);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($iditenary)
    {
        $delete = itenary::findOrFail($iditenary);
        $id = $delete->tour->id;

        $delete->delete();

        //redirect to index
    
 return redirect()->route('itenary.index');
    }

    public function show($id)
    {
     
        return view('admin.itenary.create',compact('id'));
    }
    
    public function data($id){
        $tour = Tour::all();
        $itenary = Itenary::where('tour_id','=',$id)->get();

        return view('admin.itenary.index',compact('id','tour','itenary'));

    }

   
}
