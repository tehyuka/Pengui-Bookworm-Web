@extends('layouts.main')
@section('body')
        <main role="main" class="container">
        <div class="regist">
        <form class="form-horizontal" action="/registers" method="POST" enctype="multipart/form-data">
		
        <fieldset>
<br>
<br>
<br>

<h1 class="title">Register Yourself!</h1>
<hr class="divisor">
@csrf
<!-- Text input-->
<div class="form-group">
									<label>Name </label>
									<input type="text" value="" placeholder="name" class="form-control" name="username">
								</div>
								<div class="form-group">
									<label>Phone Number</label>
									<input type="number" value="" placeholder="phone number" class="form-control" name="telepon">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" value="" placeholder="email" class="form-control" name="email">
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea name="alamat" placeholder="address" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label>Username</label>
									<input type="text" value="" placeholder="username" class="form-control" name="nama_pengguna">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" value="" placeholder="password" class="form-control" name="password">
								</div>
                
                <br>
								<button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"> </i>Submit</button>
               
              </fieldset>
</form>
              </div>
              <br> 
<style>

  .regist{
    padding: 0px 200px 0px 200px;
  }

  body {
  background-image: url('images/bg6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
  </main>
  @endsection