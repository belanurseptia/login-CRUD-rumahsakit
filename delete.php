<?php
include 'rskoneksi.php';

$idpasien=$_GET['idpasien'];

$query=mysqli_query($rskoneksi, "DELETE FROM pasien WHERE idpasien='$idpasien' ")
or die(mysqli_error($rskoneksi));


if($query){
    header("Location: read.php");
}else{
    echo"gagal hapus data";
}
?>