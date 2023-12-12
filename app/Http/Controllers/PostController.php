<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Request $request): View
    {

        $posts = Post::latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
       //validate form
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|string',
        ]);
      //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());
      //create post
        Post::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content,
        ]);
      //redirect to index
            return redirect()->route('posts.index')->with(['success' => 'Data
            Berhasil Disimpan!']);
    }


    /**
     * Display the specified resource.
     */
    public function show(String $id): View
    {
        $post = Post::findOrFail($id);


        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id): View
    {
        $post = Post::findOrFail($id);

        return view('posts.edit',compact('post'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
      //validate form
      $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        'title' => 'required|min:5',
        'content' => 'required|string',
    ]);
      $post = Post::findOrFail($id);

      if($request->hasFile('image')){

        $image = $request->file('image');
        $image->storeAs('public/posts/', $image->hashName());

        Storage::delete('public/posts/', $post->image);

        $post->update([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content,
        ]);
      }else {

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
      }
      return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $post = Post::findOrFail($id);

        $old_image = $post->image;
        $post->delete();
        if(!empty($old_image) && (Storage::disk('public'))->exists($old_image)){
            Storage::disk('public')->delete($old_image);
        }
        return to_route('posts.index');
    }

    public function keyword(Request $request): View
    {
    $search = $request->input('search');

    $posts = Post::where('title', 'like', '%' . $search . '%')
        ->paginate(5);

    return view('posts.index', compact('posts'));
    }
}
