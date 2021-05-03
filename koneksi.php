<?php
if (empty($_SESSION["email"])){
    $_SESSION["alert"] = "anda harus login terlebih dahulu";
    header ("Location:login.php");
}
?>
