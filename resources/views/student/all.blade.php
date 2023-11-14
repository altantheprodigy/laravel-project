@extends('layouts.main')

@section('content')
    <h1>Ini adalah halaman Student!</h1>

    <div class="container mt-5">
       
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nis</th>
                    <th scope="col">Kelas</th>
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
               <td>{{ $student->kelas }}</td>
               <td>
                <a href="/student/detail/{{ $student->id }}">
                    <button class="btn btn-warning">Edit</button>
                </a>
                
                <button class="btn btn-danger" data-id="{{ $student->id }}">Delete</button>
                <a href="/student/detail/{{ $student->id }}">
                    <button class="btn btn-primary">Detail</button>
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


