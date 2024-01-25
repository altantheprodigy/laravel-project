@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <form method="POST" action="/student/add">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ old('nama') }}">

            </div>
            <div class="form-group">
                <label for="nis">NIS:</label>
                <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS" value="{{ old('nis') }}">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                {{-- <input type="text" class="form-control" id="kelas"name="kelas" placeholder="Masukkan Kelas" value="{{ old('kelas') }}"> --}}
               <select name="form-select" id="kelas_id">
                @foreach ($grades as $grade )
                <option name="kelas_id" value="{{$grade->id}}">{{$grade->nama}}</option>
            @endforeach
               </select>
            </div>
            <div class="form-group">
                <label for="kelas">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="{{ old('alamat') }}">
            </div>
            <div class="form-group">
                <label for="kelas">tanggal lahir:</label>
                <input type="Date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal lahir" value="{{ old('tgl_lahir') }}">
            </div>  
            <button type="submit" class="btn btn-primary">Add Data</button>
        </form>
    </div>
@endsection
