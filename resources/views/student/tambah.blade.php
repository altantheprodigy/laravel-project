@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <form method="POST" action="/dashboard/add">
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
                <select name="kelas_id" id="kelas_id" class="form-control">
                    @foreach ($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->nama }}</option>
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
