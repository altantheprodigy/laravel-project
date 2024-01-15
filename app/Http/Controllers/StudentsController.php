<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
  public function index() 
   {
    
        return view('./student/all', [
            "title" => "student",
            "students" => Student::all()
        ]);
    
  }

  public function show(Student $student) 
  {
    return view('student.detail', [
      "title" => "detail-students",
      "student" => $student
    ]);
}

public function create(Student $student) 
  {
    return view('student.tambah', [
      "title" => "AddData-students",
      "student" => $student
    ]);
}

public function store(Request $request)
{
  $validatedData = $request->validate([
    'nis' => 'required|max:225',
    'nama' => 'required|max:225',
    'kelas' => 'required',
    'tgl_lahir' => 'required',
    'alamat' => 'required'
]);

  Student::create($validatedData);
  return redirect('/student/all')->with('success','Data siswa berhasil ditambahkan');
}
}
