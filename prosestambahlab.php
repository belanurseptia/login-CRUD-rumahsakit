<?php
include 'rskoneksi.php';

$kd_laboratorium=$_POST['kd_laboratorium'];
$nama_pasien=$_POST['nama_pasien'];
$hasil_lab=$_POST['hasil_lab'];
$keterangan=$_POST['keterangan'];

$query=mysqli_query($rskoneksi, "INSERT INTO laboratorium(kd_laboratorium, nama_pasien, hasil_lab, keterangan)
VALUES ('$kd_laboratorium', '$nama_pasien', '$hasil_lab', '$keterangan')")
or die(mysqli_error($rskoneksi));

if($query){
    header("Location: readlab.php");
}else{
    echo"gagal input data";
}

?>