<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\kelas;
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


  public function edit(Student $student)  
  {
    return view('student.edit', [
      "title" => "detail-students",
      "student" => $student,
      "grades" => kelas::all(),
    ]);
}

public function update(Request $request, Student $student) {

  $validatedData = $request->validate([
    'id' => 'AUTO INCREMENT',
    'nis' => 'required|max:225',
    'nama' => 'required|max:225',
    'kelas_id' => 'required',
    'tgl_lahir' => 'required',
    'alamat' => 'required',
]);

$result = Student::where('id', $student->id)->update($validatedData);

if ($result) {
    return redirect('/student/all')->with('success', 'Data siswa berhasil diubah');
} 

}

public function create(Student $student) 
  {
    return view('student.tambah', [
      "title" => "AddData-students",
      "grades" => kelas::all()
    ]);
}



public function store(Request $request)
{
  $validatedData = $request->validate([
    'id' => 'AUTO INCREMENT',
    'nis' => 'required|max:225',
    'nama' => 'required|max:225',
    'kelas_id' => 'required',
    'tgl_lahir' => 'required',
    'alamat' => 'required',
]);

$result = Student::create($validatedData);

if ($result) {
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
