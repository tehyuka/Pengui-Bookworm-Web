<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="icon" href="images/pp1.png">
    <title>Pengui Bookworm</title>
</br>
</br>
</br>
    <marquee loop="5"><h1>Thank you for visiting this penguin!</h1></marquee>
</br>
<br>
<br>
<div class="ph">
  <div class="container">
    <div class="content">
      <h3>Feedback submitted!</h3>
      <br>
<?php 
if(isset($_POST['btn-submit'])){
echo "<b>Name: </b>".$_POST['uname']."<br>";
echo "<b>E-mail: </b>".$_POST['email']."<br>";
echo "<b>Feedback & Suggestion: </b>".$_POST['feedback']."<br>";
}
?>
</div>
</div>
</div>
</br>
</br>
 
<div class="ft">
  <img src="images/ty.png" width="650">
</div>
    <div class="tombol">
    </br>
  </br>
    <a href="/" class="btn btn-info" role="button">Home</a>
      </div>
    </br>
<style type="text/css">

.content {
  padding: 50px 30px 50px 50px;
  background-color: #e4deff;
  position: relative;
  border-radius: 6px;
}

.container {
  width: 100%;
  padding-left: 50px;
  padding-right: 50px;
  }



.ft{
  padding: 0px 0px 0px 310px;
}
.tombol{
  padding: 0px 0px 0px 603px;
}
body {
  background-image: url('images/bg6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>

</body>

</html>