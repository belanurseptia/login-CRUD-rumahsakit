<?php
include 'rskoneksi.php';
$kdlama=$_GET['kd_laboratorium'];
$kd_laboratorium=$_POST['kd_laboratorium'];
$nama_pasien=$_POST['nama_pasien'];
$hasil_lab=$_POST['hasil_lab'];
$keterangan=$_POST['keterangan'];

$query=mysqli_query($rskoneksi, "UPDATE laboratorium 
SET kd_laboratorium='$kd_laboratorium', nama_pasien='$nama_pasien', hasil_lab='$hasil_lab', keterangan='$keterangan' 
WHERE kd_laboratorium='$kdlama'")
or die(mysqli_error($rskoneksi));

if($query){
    header("Location:readlab.php");
}else{
    echo"gagal update data";
}
?>