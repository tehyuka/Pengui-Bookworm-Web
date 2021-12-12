@extends('layouts.main')
@section('body')

    <br>
    <br>
    <br>
    

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{session('loginError')}}
</div>
@endif

        <main role="main" class="container">
          <div class="logn">
        <form method="post" action="/logins" id="formlogin">
          @csrf
        <h1 class="title">Log in Here!</h1>
        <hr class="divisor">
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" class="form-control" placeholder="email" type="text" required="required" autocomplete="off">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label>Password</label>
                       
<input name="password" class="form-control" placeholder="password" type="password" required="required" autocomplete="off">
                        </div> <!-- form-group// --> 
                        <br>
                        <div class="form-group">
        <button type="submit" name="proses_login" class="btn btn-primary">Login</button>
                        </div> <!-- form-group// -->  
          </div>                                                         
            <style>

.logn{
    padding: 0px 200px 0px 200px;
  }

  .try{
  padding: 0px 70px 0px 130px;
  }
 
  body {
  background-image: url('../images/bg6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
        </form> 
        </main>
@endsection