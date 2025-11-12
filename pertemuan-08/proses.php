<?php
session_start();
if (isset($_POS['kirim'])) {
$_SESSION["sesnim"] = $_POST["nim"];
$_SESSION["sesnamalengkap"] = $_POST["namalengkap"];
$_SESSION["sestanggallahir"] = $_POST["tanggallahir"];
$_SESSION["seshobi"] = $_POST["hobi"];
$_SESSION["sespasangan"] = $_POST["pasangan"];
$_SESSION["sespekerjaan"] = $_POST["pekerjaan"];
$_SESSION["sesnamaorangtua"] = $_POST["namaorangtua"];
$_SESSION["sesnamakakak"] = $_POST["namakakak"];
$_SESSION["sesnamaadik"] = $_POST["namaadik"];
header("location: index.php");
}
?>