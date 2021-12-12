@extends('layouts.main')
@section('body')

<main role="main" class="container">
        <div class="regist">
        <form class="form-horizontal" action="/bok" method="POST" enctype="multipart/form-data">
		@csrf
        <fieldset>
</br>
</br>
</br>
<h1 class="title">Add New Book Here!</h1>
<hr class="divisor">
@csrf
<!-- Text input-->
<div class="form-group">
									<label>Judul Buku</label>
									<input type="text" value="" placeholder="Judul Buku" class="form-control" name="judul_buku">
								</div>
								<div class="form-group">
									<label>Penulis</label>
									<input type="text" value="" placeholder="Penulis" class="form-control" name="penulis">
								</div>
								<div class="form-group">
									<label>Penerbit</label>
									<input type="text" value="" placeholder="Penerbit" class="form-control" name="penerbit">
								</div>
								<div class="form-group">
									<label>Tahun Terbit</label>
									<input type="number" placeholder="Tahun Terbit" class="form-control" name="tahun_terbit">
								</div>
                
                <br>
								<button class="btn btn-primary btn-md" name="create"><i class="bi bi-plus-circle"></i> Submit</button>
               
              </fieldset>
</form>
<style>

  .regist{
    padding: 0px 200px 0px 200px;
  }

  body {
  background-image: url('../images/bg6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
} 
</style>
  </main>
</br>
@endsection