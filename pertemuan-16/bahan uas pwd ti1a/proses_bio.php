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

$errors_biodata = [];

if ($kodedos === '') {
  $errors_biodata[] = 'kodedos wajib diisi.';
}

if ($nama === '') {
  $errors_biodata[] = 'Nama wajib diisi.';
}

if ($alamat === '') {
  $errors_biodata[] = 'alamat wajib diisi.';
}

if ($tanggal === '') {
  $errors_biodata[] = 'tanggal wajib diisi.';
}

if ($jja === '') {
  $errors_biodata[] = 'jja wajib diisi.';
}

if ($prodi === '') {
  $errors_biodata[] = 'prodi wajib diisi.';
}

if ($nohp === '') {
  $errors_biodata[] = 'nohp wajib diisi.';
}

if ($pasangan === '') {
  $errors_biodata[] = 'pasangan wajib diisi.';
}

if ($anak === '') {
  $errors_biodata[] = 'anak wajib diisi.';
}

if ($ilmu === '') {
  $errors_biodata[] = 'ilmu wajib diisi.';
}

if (!empty($errors_biodata)) {
  $_SESSION['old_biodata'] = [
    'kodedos'  => $kodedos,
    'nama' => $nama ,
    'alamat' => $alamat,
    'tanggal' => $tanggal,
    'jja' => $jja,
    'prodi' => $prodi,
    'nohp' => $nohp,
    'pasangan' => $bpasangan,
    'anak' => $anak,
    'ilmu' => $ilmu,
    ];



$_SESSION["biodata"] = $arrBiodata;

header("location: index.php#about");
