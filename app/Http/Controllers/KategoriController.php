<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Cviebrock\EloquentSluggable\Services\SlugService;

class KategoriController extends Controller
{
   
    public function index(): View
    {
        $kategori = kategori::all();
  
       

        //render view with posts
        return view('admin/kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
       
        return view('admin/kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
       $slug = SlugService::createSlug(kategori::class, 'slug', $request->kategori);

        //upload image
      
        //create post
        kategori::create([
         
            'slug' => $slug,
            'kategori'=> $request->kategori,
      
        ]);

        //redirect to index
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $kategori = kategori::findOrFail($id);

        //render view with post
        return view('admin/kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
       $this->validate($request, [
          
            'kategori'   => 'required',
           
            

        ]);
        //get post by ID
        $slug = SlugService::createSlug(kategori::class, 'slug', $request->kategori);
        $kategori = kategori::findOrFail($id);

        //check if image is uploaded
     

            //update kategori without image
            $kategori->update([
                'kategori'=> $request->kategori,
                'slug' => $slug,
            ]);
        

        //redirect to index
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $kategori = kategori::findOrFail($id);

        //delete image
     

        //delete tour
        $kategori->delete();

        //redirect to index
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
