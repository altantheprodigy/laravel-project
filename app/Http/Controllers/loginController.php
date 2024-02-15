<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    public function login() 
   {
        return view('login.index', [
            "title" => "Form Login",
        ]);
  }

  public function authenticate(Request $request): RedirectResponse
  {
      $credentials = $request->validate([
          'email' => ['required', 'email'],
          'password' => ['required'],
      ]);

      if (Auth::attempt($credentials)) {
          $request->session()->regenerate();
          
          return redirect()->intended('/dashboard/dashboard');
      }

      return back()->with('loginEror', "login gagal !");

}


public function logout(){
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login/index');
}
}