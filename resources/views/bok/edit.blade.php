@extends('layouts.main')
@section('body')

<main role="main" class="container">
        <div class="regist">
        <form class="form-horizontal" action="/bok/{{$books->id}}" method="POST" enctype="multipart/form-data">
		@method('put')
		@csrf

        <fieldset>
</br>
</br>
</br>
<h1 class="title">Edit Book Here!</h1>
<hr class="divisor">

<!-- Text input-->
<div class="form-group">
									<label>Judul Buku</label>
									<input type="text" value="{{$books->judul_buku}}" placeholder="Judul Buku" class="form-control" name="judul_buku">
								</div>
								<div class="form-group">
									<label>Penulis</label>
									<input type="text" value="{{$books->penulis}}" placeholder="Penulis" class="form-control" name="penulis">
								</div>
								<div class="form-group">
									<label>Penerbit</label>
									<input type="text" value="{{$books->penerbit}}" placeholder="Penerbit" class="form-control" name="penerbit">
								</div>
								<div class="form-group">
									<label>Tahun Terbit</label>
									<input type="number" value="{{$books->tahun_terbit}}" placeholder="Tahun Terbit" class="form-control" name="tahun_terbit">
								</div>
                
                <br>
								<button class="btn btn-primary btn-md" name="create"><i class="bi bi-pencil"></i> Edit</button>
               
              </fieldset>
</form>
<style>

  .regist{
    padding: 0px 200px 0px 200px;
  }

  body {
  background-image: url('../../images/bg6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
} 
</style>
  </main>
</br>
@endsection