@extends('layout.master')
@section('content')
<div class="container">
    <h1 class="text-center">Edit Buku</h1>

    <form action="/{{$books->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="judul_buku" class="form-label">Judul buku</label>
            <input class="form-control" type="text" name="judul_buku" placeholder="Judul buku" id="" value="{{$books->judul_buku}}">
        </div>

        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">Tahun terbit</label>
            <input class="form-control" type="text" name="tahun_terbit" placeholder="Tahun terbit" id="" value="{{$books->tahun_terbit}}">
        </div>

        <div class="mb-3">
            <label for="nama_penulis" class="form-label">Nama penulis</label>
            <input class="form-control" type="text" name="nama_penulis" placeholder="Nama penulis" id="" value="{{$books->nama_penulis}}">
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
            <input class="form-control" type="date" name="tanggal_lahir" id="" value="{{$books->tanggal_lahir}}">
        </div>

        <div class="mb-3">
            <label for="kota_lahir" class="form-label">Kota lahir</label>
            <input class="form-control" type="text" name="kota_lahir" placeholder="Kota kelahiran" id="" value="{{$books->kota_lahir}}">
        </div>
        <input class="btn btn-success" type="submit" value="update" name="submit">
    </form>
</div>
@endsection