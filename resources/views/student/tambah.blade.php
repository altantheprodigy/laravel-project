@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <form method="POST" action="/student/add">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">

            </div>
            <div class="form-group">
                <label for="nis">NIS:</label>
                <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" class="form-control" id="kelas"name="kelas" placeholder="Masukkan Kelas">
            </div>
            <div class="form-group">
                <label for="kelas">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
            </div>
            <div class="form-group">
                <label for="kelas">tanggal lahir:</label>
                <input type="Date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal lahir">
            </div>  
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
