<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($login)) {
            // Jika login berhasil
            return redirect()->intended('/posts');
        }

        // Jika login gagal, arahkan kembali ke halaman login
        return redirect()->route('login')->with('error', 'Email atau password salah');


    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
