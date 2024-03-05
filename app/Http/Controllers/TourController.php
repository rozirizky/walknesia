<?php

namespace App\Http\Controllers;

use App\Models\tour;
use App\Models\kategori;
use Illuminate\View\View;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;




class TourController extends Controller
{
   

   
    public function index(): View
    {
        $tour = Tour::latest()->paginate(5);
  
       

        //render view with posts
        return view('admin.tour.index', compact('tour'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $kategori = kategori::all();
        return view('admin.tour.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'gambar'     => 'required|image|mimes:jpeg,jpg,png,webp|max:2048',
            'tour'     => 'required|max:100',
            'days'   => 'required',
            'harga'   => 'required',
            'deskripsi'   => 'required',
            'kategori'   => 'required',
           
            

        ]);
       $slug = SlugService::createSlug(Tour::class, 'slug', $request->tour);

        //upload image
        $image = $request->file('gambar');
        $image->storeAs('public/images', $image->hashName());

        //create post
        Tour::create([
            'tour'     => $request->tour,
            'slug' => $slug,
            'kategori_id'=> $request->kategori,
            
           
            'days'   => $request->days,
            'harga'   => $request->harga,
            'deskripsi'   => $request->deskripsi,
            'gambar'     => $image->hashName()
        ]);

        //redirect to index
        return redirect()->route('admin.tour.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $tour = Tour::findOrFail($id);

        //render view with post
        return view('admin.tour.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $this->validate($request, [
            'gambar'     => 'required|image|mimes:jpeg,jpg,png,webp|max:2048',
            'tour'     => 'required|max:100',
            'days'   => 'required',
            'harga'   => 'required',
            'deskripsi'   => 'required',
            'kategori'   => 'required',
           
            

        ]);
        $slug = SlugService::createSlug(Tour::class, 'slug', $request->tour);

        //get post by ID
        $tour = Tour::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('gambar')) {

            //upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/images', $image->hashName());

            //delete old image
            Storage::delete('public/images/'.$tour->gambar);

            //update post with new image
            $tour->update([
                'tour'     => $request->tour,
                'days'   => $request->days,
                'harga'   => $request->harga,
                'deskripsi'   => $request->deskripsi,
                'gambar'     => $image->hashName(),
                'slug' => $slug,
            ]);

        } else {

            //update tour without image
            $tour->update([
                'tour'     => $request->tour,
                'days'   => $request->days,
                'harga'   => $request->harga,
                'deskripsi'   => $request->deskripsi,
                'slug' => $slug,
               
            ]);
        }

        //redirect to index
        return redirect()->route('tour.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $tour = Tour::findOrFail($id);

        //delete image
        Storage::delete('public/images/'. $tour->gambar);

        //delete tour
        $tour->delete();

        //redirect to index
        return redirect()->route('tour.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
   
    
}
