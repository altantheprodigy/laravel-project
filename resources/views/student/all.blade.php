@extends('layouts.main')

@section('content')
<h1>Ini adalah halaman Student!</h1>

<a href="/student/tambah">
    <button class="btn btn-success" >Tambah</button>
</a>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{session ('success')}}
        </div>
    @endif

    <div class="container mt-5">
       
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nis</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">tanggal lahir</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
            $no = 1;
        @endphp
               @foreach ($students as $student )
               
               <tr>
               <td>{{$no}}</td>
               <td>{{ $student->nama }}</td>
               <td>{{ $student->nis }}</td>
               <td>
                @if ($student->kelas)
                    {{ $student->kelas->nama }}
                @else
                    No Class
                @endif
            </td>
               <td>{{ $student->alamat }}</td>
               <td>{{ $student->tgl_lahir }}</td>
               <td class="d-flex justify-content-evenly">
                <a href="/student/edit/{{ $student->id }}">
                    <button class="btn btn-warning">Edit</button>
                </a>
                
                <form  method="POST" action="/student/delete/{{ $student->id }}" class="inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data siswa ini?')">Delete</button>
                </form>
               
                <a href="">
                    <button class="btn btn-primary">Refresh</button>
                </a>
            </td>

            </tr> 
           
           @php
            $no++;
            @endphp
               @endforeach
            </tbody>
        </table>
    </div>
@endsection


