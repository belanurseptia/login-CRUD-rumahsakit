<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title>Daftar Pasien</title>
</head>

<body>
    <div class="jumbotron text-white bg-secondary">
    <div class="container">
    <h1 class="display-6"><i class="bi bi-flower2"></i></i> SISTEM INFORMASI RS BELLA</h1>
    </div>

    <div class="container"  >
    <h3><centar>DATA LABORATORIUM</h3><br>

    <div class="btn-group" role="group" aria-label="Basic example">
    <p><a href="index.php" class="btn btn-danger ">
    <i class="bi bi-arrow-left-circle"></i> kembali</a></p>
    <p><a href="tambahlab.php" class="btn btn-info ">Tambah data</a></p>
    </div>

    <table border ="1">
    <table class="table">
    <table class="table table-striped table-bordered table-dark">
    <tr>
      <th scope="col">KODE LABORATORIUM</th>
      <th scope="col">NAMA PASIEN</th>
      <th scope="col">HASIL LAB</th>
      <th scope="col">KETERANGAN</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
    <tbody>
      <?php
        include 'rskoneksi.php';
        $data=mysqli_query($rskoneksi, "SELECT * FROM laboratorium") or die(mysqli_error($rskoneksi));
        foreach($data as $baris){ ?>
        <tr>
            <td><?php echo $baris['kd_laboratorium']?></td> 
            <td><?php echo $baris['nama_pasien']?></td> 
            <td><?php echo $baris['hasil_lab']?></td> 
            <td><?php echo $baris['keterangan']?></td> 
            <td>
                <a href="updatelab.php?kd_laboratorium=<?php echo $baris['kd_laboratorium']?>" 
                class="btn btn-info"><i class="bi bi-pencil-square"></i> Update</a>
                <a href="deletelab.php?kd_laboratorium=<?php echo $baris['kd_laboratorium']?>" 
                class="btn btn-info"><i class="bi bi-trash"></i> Delete</a>
            </td>
        </tr>
      <?php } ?>
    </tbody>
    </div>
</body>
</html>
    