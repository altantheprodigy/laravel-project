@extends('layouts.main')

@section('content')
    <h1>Ini adalah halaman Extracurriculer!</h1>

    <div class="container mt-5">
       
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nama Pembina</th>
                    <th scope="col">Desc</th>
                  
                </tr>
            </thead>
            <tbody>
                @php
            $no = 1;
        @endphp
               @foreach ($extra as $extras )
               
               <tr>
               <td>{{$no}}</td>
               <td>{{$extras["nama"]}}</td>
               <td>{{$extras["nama_pembina"]}}</td>
               <td>{{$extras["desc"]}}</td>
              
            </tr> 
           
           @php
            $no++;
            @endphp
               @endforeach
            </tbody>
        </table>
    </div>







@endsection