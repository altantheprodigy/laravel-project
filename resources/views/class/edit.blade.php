@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <form method="POST" action="/dashboard/updateKelas/ {{$kelas->id}}">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Kelas:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $kelas->nama }}">
                <button type="submit" class="btn btn-primary">Edit Data</button>
    </div>
@endsection
