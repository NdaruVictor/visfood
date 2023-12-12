<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('landing.recipe.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::with('recipes', 'alamats')->findOrFail($id);

        return view('landing.recipe.show', compact('post'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $posts = Post::where('title', 'like', '%' . $search . '%')
                    ->get();

        return view('landing.recipe.index', compact('posts'));
    }
}
