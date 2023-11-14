<?php

namespace App\Http\Controllers;
use App\Models\extra;
use Illuminate\Http\Request;

class ExtraContoller extends Controller
{
  public function index()  {
    return view('extra', [
        "title" => "extracurricular",
        "extra" => extra::all()
    ]);
  }
}
