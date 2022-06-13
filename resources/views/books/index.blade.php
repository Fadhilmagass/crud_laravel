 @extends('layout.master')

 @section('content')
 <div class="container">
     <h1 class="text-center">Data Buku</h1>
 </div>
 <div class="container">
     <div class="mb-3 mt-4">
         <a class="btn btn-primary" href="/create">Tambah</a>
     </div>
     <table class="table table-bordered table-success table-stripped table-responsive">
         <th>
         <td>Judul buku</td>
         <td>Tahun terbit</td>
         <td>Nama penulis</td>
         <td>Tanggal lahir</td>
         <td>Kota lahir</td>
         <td>Aksi</td>
         </th>
         @foreach($books as $b)
         <tr>
             <td>{{$b->id}}</td>
             <td>{{$b->judul_buku}}</td>
             <td>{{$b->tahun_terbit}}</td>
             <td>{{$b->nama_penulis}}</td>
             <td>{{$b->tanggal_lahir}}</td>
             <td>{{$b->kota_lahir}}</td>
             <td>
                 <div class="btn-group" role="group" aria-label="Basic example">
                     <a class="btn btn-warning" href="/{{$b->id}}/edit">Edit</a>
                     <form action="/{{$b->id}}" method="POST">
                         @csrf
                         @method('delete')
                         <input class="btn btn-danger" type="submit" value="Delete" name="submit">
                     </form>
                 </div>
             </td>
         </tr>
         @endforeach
     </table>
 </div>
 @endsection