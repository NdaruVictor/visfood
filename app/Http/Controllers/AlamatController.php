<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AlamatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alamats = Alamat::latest()->paginate(5);
        return view('alamat.index', compact('alamats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $posts = Post::all();
        return view('alamat.create', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
         $this->validate($request, [
            'post_id' => 'required',
            'nama_tempat' => 'required|string',
            'alamat' => 'required|string',
        ]);
        //create a new alamat
        Alamat::create([
            'post_id' => $request->post_id,
            'nama_tempat' => $request->nama_tempat,
            'alamat' => $request->alamat,
        ]);
      //redirect to index
            return redirect()->route('alamats.index')->with(['success' => 'Data
            Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id): View
    {
        $alamat = Alamat::findOrFail($id);
        return view('alamat.show',compact('alamat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id): View
    {
        $alamat = Alamat::findOrFail($id);
        $posts   = Post::all();

        return view('alamat.edit',compact('alamat', 'posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alamat $alamat)
    {
         //validate form
         $this->validate($request, [
            'post_id' => 'required',
            'nama_tempat' => 'required|string',
            'alamat' => 'required|string',
        ]);
        //update a alamat
        $alamat->update([
            'post_id' => $request->post_id,
            'nama_tempat' => $request->nama_tempat,
            'alamat' => $request->alamat,
        ]);

        // Redirect to the recipe show page with a success message
        return redirect()->route('alamats.index')->with(['success' => 'Data Berhasil Diperbarui!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alamat $alamat)
    {
        // Delete the recipe
        $alamat->delete();
        // Redirect to the index page with a success message
        return redirect()->route('alamats.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
