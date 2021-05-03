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
    <p class="lead">Ubah dan Perbarui Data Pasien Rawat Inap</p>
    </div>

    <div class="container">
    <?php
        include 'rskoneksi.php';
        $idpasien=$_GET['idpasien'];
        $data=mysqli_query($rskoneksi, "SELECT * FROM pasien WHERE  idpasien='$idpasien'")
         or die (mysqli_error($rskoneksi));
        $baris=mysqli_fetch_array($data);
    ?>
        <div class="col-md-4">
            <form action="prosesupdate.php?idpasien=<?php echo $idpasien ?>" method="post">
                <label for="idpasien">ID PASIEN</label>
                <input type="number" class="form-control" name="idpasien">
                <label for="nama_pasien">NAMA PASIEN</label>
                <input type="text" class="form-control" name="nama_pasien">
                <label for="dokter">DOKTER</label>
                <input type="text" class="form-control" name="dokter">
                <label for="kamar">KAMAR</label>
                <input type="text" class="form-control" name="kamar"><br>

                <button class="btn btn-primary mt-1" type="submit" name="button">simpan data</button>
            </form>
        </div>
    </div>
</body>
</html>