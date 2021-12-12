@extends('layouts.main')
@section('body')
</br>
</br>
</br>
<div class="container">
    <div class="fb">
        <h1>Feedback</h1>
    </div>
    <div class="line">
    <hr class="divisor">
</div>
    <div class="for">
      <form action="thanks.php" class="was-validated" method="POST">
        <div class="form-group">
          <label for="uname">Name:</label>
          <input type="text" class="form-control" id="uname" placeholder="Name" name="uname" required>
        </div>
        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="email" class="form-control" id="email" placeholder="E-mail Address" name="email" required>
        </div>
        <div class="col-75"> 
          <label for="feedback">Feedback & Suggestion:</label>   
          <textarea id="feedback" class="form-control" name="feedback" placeholder="Feedback & Suggestion" style="height:200px; width: 950px;" required></textarea>    
        </div>
    </div>
      <div class="form-group form-check">
          <div class="chc">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" required> I have visited this entire website.
              
              </label>
          </div>
      </div>
      <div class="bn">
        <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</br>
</br>
    <div class="tombol">
        <a href="/aktivitas" class="btn btn-info" role="button">Previous</a>
      </div>
    </br>
  </div>
<style type="text/css">

.for{
  padding: 10px 80px 20px 80px;
}

.chc{
    padding: 10px 0px 0px 80px;
}

.bn{
    padding: 20px 0px 20px 80px;
}

.fb{
  padding: 0px 0px 0px 470px;
}

.tombol{
  padding: 0px 0px 0px 503px;
}

.line{
  padding: 0px 80px 0px 80px;
}

body {
  background-image: url('images/bg6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
@endsection