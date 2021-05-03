<?php
include 'rskoneksi.php';

$idpasien=$_POST['idpasien'];
$nama_pasien=$_POST['nama_pasien'];
$dokter=$_POST['dokter'];
$kamar=$_POST['kamar'];

$query=mysqli_query($rskoneksi, "INSERT INTO pasien(idpasien, nama_pasien, dokter, kamar) 
VALUES ('$idpasien', '$nama_pasien', '$dokter', '$kamar')")
or die(mysqli_error($rskoneksi));

if($query){
    header("Location: read.php");
}else{
    echo"gagal input data";
}
?>