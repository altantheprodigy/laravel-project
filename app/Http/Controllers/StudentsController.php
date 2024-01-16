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
    'id' => 'AUTO INCREMENT',
    'nis' => 'required|max:225',
    'nama' => 'required|max:225',
    'kelas' => 'required',
    'tgl_lahir' => 'required',
    'alamat' => 'required',
]);

$result = Student::create($validatedData);

if ($result->wasRecentlyCreated) {
    return redirect('/student/all')->with('success', 'Data siswa berhasil ditambahkan');
} 

  }

  public function destroy(Student $student)
  {
      $result = Student::destroy($student->id);

      if ($result) {
        return redirect('/student/all')->with('success', 'Data siswa berhasil dihapus');
      }
  }
  
}
