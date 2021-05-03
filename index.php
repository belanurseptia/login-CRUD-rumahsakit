<?php
session_start();
include'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah sakit</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" > Welcome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse align" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#"> <?php echo $_SESSION["email"] ?></a>
      </li>
      <li class="nav-item">
      <a  href="logout.php" class="btn btn-danger"> logout </a>
      </li>
    </ul>
  </div>
</nav>
 <!----------Jumbotron------>
 <div class="jumbotron text-white bg-secondary ">
      <div class="container">
      <h1 class="display-5"><i class="bi bi-flower2"></i></i> SISTEM INFORMASI RS BELLA</h1>
      </div>
    </div>
<center>
<div class="row mx-auto ">
  <div class="col-sm-5 mx-auto">
    <div class="card mx-auto">
      <div class="card-body">
        <h5 class="card-title"><center>RAWAT INAP</h5>
        <h1 class="card-text"><center><i class="bi bi-door-open"></i></h1> 
        <a  href="read.php" class="btn btn-primary">lihat daftar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-5 mx-auto">
    <div class="card mx-auto">
      <div class="card-body ">
        <h5 class="card-title"><center>LABORATORIUM</h5>
        <h1 class="card-text"><center><i class="bi bi-clipboard-check"></i></h1>
        <a href="readlab.php" class="btn btn-primary">lihat daftar</a>
      </div>
    </div>
  </div>
  </div>
 </body>

</html>
