@extends('layouts.main')

@section('content')
<h1>Ini adalah halaman Kelas!</h1>

{{-- <a href="/class/tambah">
    <button class="btn btn-success" >Tambah</button>
</a> --}}


    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{session ('success')}}
        </div>
    @endif


<div class="container mt-5">
       
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
            </tr>
        </thead>
        <tbody>
            @php
        $no = 1;
    @endphp
           @foreach ($kelas as $classs )
           
           <tr>
           <td>{{$no}}</td>
           <td>{{ $classs->nama }}</td>
        </tr> 
       
       @php
        $no++;
        @endphp
           @endforeach
        </tbody>
    </table>
    
</div>
@endsection