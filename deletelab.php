<?php
include 'rskoneksi.php';

$kd_laboratorium=$_GET['kd_laboratorium'];

$query=mysqli_query($rskoneksi, "DELETE FROM laboratorium WHERE kd_laboratorium='$kd_laboratorium' ")
or die(mysqli_error($rskoneksi));


if($query){
    header("Location:readlab.php");
}else{
    echo"gagal hapus data";
}
?>