<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function Register() 
    {
         return view('login.signin', [
             "title" => "Form Register",
         ]);
   }


public function store(Request $request)
{
  $validatedData = $request->validate([
    'email' => 'required|email|unique:users,email',
    'name' => 'required|max:225',
    'password' => 'required|min:5|max:225',
]);

$validatedData['password'] = Hash::make($validatedData['password']);

User::create($validatedData);
$request->session()->flash('success', "Register Berhasil, silahkan login!");

return redirect('/login/index');

}
}
