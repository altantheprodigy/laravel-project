<?php

namespace App\Http\Controllers;
use App\Models\kelas;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function index() 
    {
     
         return view('./class/kelas', [
             "title" => "kelas",
             "kelas" => kelas::all()
         ]);
     
   }

   public function create(kelas $class) 
   {
    
        return view('./class/tambah', [
            "title" => "AddData-Kelas",
            "kelas" => $class
        ]);
    
  }

  public function store(Request $request)
{
  $validatedData = $request->validate([
    'id' => 'AUTO INCREMENT',
    'nama' => 'required|max:225',
]);

$result = kelas::create($validatedData);

if ($result) {
    return redirect('/dashboard/grade')->with('success', 'Data siswa berhasil ditambahkan');
} 

  }


  public function destroy(kelas $kelas)
  {
      $result = $kelas->delete();
  
      if ($result) {
          return redirect('/class/kelas')->with('success', 'Data siswa berhasil dihapus');
      }
  }

//   public function edit(kelas $kelas) 
//   {
//     return view('class.edit', [
//       "title" => "edit-kelas",
//       "kelas" => $kelas
//     ]);
// }

// public function update(Request $request, kelas $kelas) {

//     $validatedData = $request->validate([
//       'nama' => 'required|max:225',
//   ]);
  
//   $result = kelas::where('id', $kelas->id)->update($validatedData);
  
//   if ($result) {
//       return redirect('/class/kelas')->with('success', 'Data siswa berhasil diubah');
//   } 
  
//   }
  
}
