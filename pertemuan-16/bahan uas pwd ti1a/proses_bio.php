<?php
session_start();
require __DIR__ . './koneksi.php';
require_once __DIR__ . '/fungsi.php';

/*
	ikuti cara penulisan proses.php untuk validasi, sanitasi, RPG, data old
	dan insert ke tbl_tamu termasuk flash message ke index.php#biodata
	bedanya, kali ini diterapkan untuk biodata dosen bukan tamu
*/

$arrBiodata =
$kodedos  = bersihkan($_POST['txtKodeDos'] ?? '');
$nama     = bersihkan($_POST['txtNmDosen'] ?? '');
$alamat   = bersihkan($_POST['txtAlRmh'] ?? '');
$tanggal  = bersihkan($_POST['txtTglDosen'] ?? '');
$jja      = bersihkan($_POST['txtJJA'] ?? '');
$prodi    = bersihkan($_POST['txtProdi'] ?? '');
$nohp     = bersihkan($_POST['txtNoHP'] ?? '');
$pasangan = bersihkan($_POST['txNamaPasangan'] ?? '');
$anak     = bersihkan($_POST['txtNmAnak'] ?? '');
$ilmu     = bersihkan($_POST['txtBidangIlmu'] ?? '');


$_SESSION["biodata"] = $arrBiodata;

header("location: index.php#about");
