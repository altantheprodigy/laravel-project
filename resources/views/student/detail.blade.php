@extends('layouts.main')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Formulir Data Siswa</title>
</head>

<body>
    <div class="container mt-5">
        <form>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $student->nama }}">
            </div>
            <div class="form-group">
                <label for="nis">NIS:</label>
                <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS" value="{{ $student->nis }}">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan Kelas" value="{{ $student->kelas }}">
            </div>
            <div class="form-group">
                <label for="kelas">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Kelas" value="{{ $student->alamat }}">
            </div>
            <div class="form-group">
                <label for="kelas">tanggal lahir:</label>
                <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Kelas" value="{{ $student->tgl_lahir }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
@endsection
