@extends('layouts.main')
@section('body')

</br>
</br>
</br>
    <div class="container">
      <div class="jadwalkuliah">
        <h1>Pengui Book Data</h1>
      </div>
    </br>
  </br> 
  @if(session()->has('success'))

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  @endif
        <a href="/bok/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add New Book</a> 
</br>
</br>
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Penulis</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($booksk as $books)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $books->judul_buku }}</td>
      <td>{{ $books->penulis }}</td>
      <td>{{ $books->penerbit }}</td>
      <td>{{ $books->tahun_terbit }}</td>
      <td>
          <a href="/bok/{{$books->id}}/edit" class="badge bg-warning"><span><i class="bi bi-pencil-square"></i></span></a>
          <form action="/bok/{{$books->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin?')"><span><i class="bi bi-trash"></i></span></button>
</form>
         

      </td>
    </tr>
    @endforeach
  </tbody>
</table>  

</div>
</br>
<style type="text/css">

body {
  background-image: url('images/bg6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
    </style>

@endsection