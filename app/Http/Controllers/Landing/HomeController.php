<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke()
    {

        $post = Post::all();

        return view('landing.homepage.index',compact('post'));
    }

    public function search(Request $request)
{
    $search = $request->input('search');

    $post = Post::where('title', 'like', '%' . $search . '%')
                ->get();

    return view('landing.homepage.index', compact('post'));
}

}
