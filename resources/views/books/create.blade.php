@extends('layout.master')

@section('content')
<div class="container">
    <h1 class="text-center">Create Buku</h1>

    <form action="/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul_buku" class="form-label">Judul buku</label>
            <input class="form-control" type="text" name="judul_buku" placeholder="Judul buku" required>
        </div>

        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">Tahun terbit</label>
            <input class="form-control" type="text" name="tahun_terbit" placeholder="Tahun terbit" required>
        </div>

        <div class="mb-3">
            <label for="nama_penulis" class="form-label">Nama penulis</label>
            <input class="form-control" type="text" name="nama_penulis" placeholder="Nama penulis" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
            <input class="form-control" type="date" name="tanggal_lahir" required>
        </div>

        <div class="mb-3">
            <label for="kota_lahir" class="form-label">Kota kelahiran</label>
            <input class="form-control" type="text" name="kota_lahir" placeholder="Kota kelahiran" required>
        </div>

        <input class="btn btn-success" type="submit" value="save" name="submit">
    </form>
</div>
@endsection