@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <form method="POST" action="/class/add">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Kelas:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ old('nama') }}">
                <button type="submit" class="btn btn-primary">Add Data</button>
    </div>
@endsection
