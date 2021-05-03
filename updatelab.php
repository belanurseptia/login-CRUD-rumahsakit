<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="jumbotron text-white bg-secondary">
    <h1 class="display-6"><i class="bi bi-flower2"></i> SISTEM INFORMASI RS BELLA</h1>
    <p class="lead">Ubah dan Perbarui Data Laboratorium </p>
    </div>

    <div class="container">
    <?php
        include 'rskoneksi.php';
        $kd_laboratorium=$_GET['kd_laboratorium'];
        $data=mysqli_query($rskoneksi, "SELECT * FROM laboratorium 
        WHERE  kd_laboratorium='$kd_laboratorium'")
        or die (mysqli_error($rskoneksi));
        $baris=mysqli_fetch_array($data);
    ?>
        <div class="col-md-4">
            <form action="proseupdatelab.php?kd_laboratorium=<?php echo $kd_laboratorium ?>" method="post">
                <label for="kd_laboratorium">KODE LABORATORIUM</label>
                <input type="number" class="form-control" name="kd_laboratorium">
                <label for="nama_pasien">NAMA PASIEN</label>
                <input type="text" class="form-control" name="nama_pasien">
                <label for="hasil_lab">HASIL LAB</label>
                <input type="text" class="form-control" name="hasil_lab">
                <label for="keterangan">KETERANGAN</label>
                <input type="text" class="form-control" name="keterangan"><br>

                <button class="btn btn-primary mt-1" type="submit" name="button">simpan data</button>
            </form>
        </div>    
    </div>   
</body>
</html>