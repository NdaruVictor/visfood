<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
   /**
   * Show the form for creating a new resource.
   */
  public function create(): View
  {
     return view('auth.register');
  }
  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request): RedirectResponse
  {
      $request->validate([
          'name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
          'password' => ['required', Rules\Password::defaults()],
      ]);

      $user = User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
      ]);

      event(new Registered($user));

      Auth::login($user);

      return redirect(RouteServiceProvider::HOME);
  }
}
