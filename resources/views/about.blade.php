@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
<body>
    <h1>Tentang Saya</h1>
    <p>Nama: {{ $nama }}</p>
    <p>Kelas: {{ $kelas }}</p>
    <img src="{{ asset($foto) }}" alt="Foto"  class="rounded-circle" alt="Rounded Image" width="150" height="150">
</body>
</html>

@endsection