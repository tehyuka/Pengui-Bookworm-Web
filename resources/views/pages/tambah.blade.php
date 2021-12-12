<?php
  
    if(!empty($_SESSION)){ }else{ session_start(); }
 
	if(!empty($_SESSION['ADMIN'])){ }else{ header('location:home.php'); }

    require 'includes/call.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" href="images/pp1.png">
		<title>Pengui Bookworm</title>
        <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #e3f2fd;">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
    <div class="container-fluid">
      <a class="navbar-brand">
        <img src="images/pp5.png" alt="logo" style="width:40px;">
      </a>    
    <ul class="navbar-nav mr-auto">
    <a class="nav-link" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        About me
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="pendidikan.php">Education Timeline</a>
        <a class="dropdown-item" href="jadwalkuliah.php">Class Schedule</a>
        <a class="dropdown-item" href="aktivitas.php">Activity</a>
        <?php if(empty($_SESSION['ADMIN'])){ ?>
        <a class="dropdown-item" href="form.php">Tell Me!</a>
        <?php } ?>
      </div>
    </li>
    <a class="nav-link" aria-current="page" href="book.php">Book Data</a>
          </li>
        </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">

        <?php if(empty($_SESSION['ADMIN'])){ ?>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="pages/login.php">Login</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="pages/register.php">Register</a>
          </li>
          <?php } ?>

          <?php if(!empty($_SESSION['ADMIN'])){ ?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Welcome back, <?php echo $sesi['nama_pengguna'];?> !</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="pages/logout.php" onclick="return confirm('Are you sure to logout?');">Logout</a>
          </li>
          <?php } ?>
        </ul>
    </div>
</nav>
		<title>Add</title>
	</head>
    <body>
		<div class="container">
			<br/>
			<br/><br/><br/>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-lg-6">
					<br/>
					<div class="card">
						<div class="card-header">
						<h4 class="card-title">Add</h4>
						</div>
						<div class="card-body">
					
							<form action="includes/function.php?aksi=tambah_buku" method="POST">
								<div class="form-group">
									<label>Title </label>
									<input type="text" value="" class="form-control" name="judul_buku" required>
								</div>
								<div class="form-group">
									<label>Writer</label>
									<input type="text" value="" class="form-control" name="penulis" required>
								</div>
								<div class="form-group">
									<label>Published Year</label>
									<input type="number" value="" class="form-control" name="tahun_terbit" required>
								</div>
								<button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"> </i> Submit </button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
        <style>
            body {
  background-image: url('images/bg6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
            </style>
	</body>
</html>