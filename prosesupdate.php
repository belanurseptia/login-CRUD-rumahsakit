<?php
include 'rskoneksi.php';
$idlama=$_GET['idpasien'];
$idpasien=$_POST['idpasien'];
$nama_pasien=$_POST['nama_pasien'];
$dokter=$_POST['dokter'];
$kamar=$_POST['kamar'];

$query=mysqli_query($rskoneksi, "UPDATE pasien 
SET idpasien='$idpasien', nama_pasien='$nama_pasien', dokter='$dokter', kamar='$kamar' 
WHERE idpasien='$idlama'")
or die(mysqli_error($rskoneksi));

if($query){
    header("Location:read.php");
}else{
    echo"gagal update data";
}
?>