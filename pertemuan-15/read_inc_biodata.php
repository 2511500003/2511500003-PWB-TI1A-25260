<?php
require 'koneksi.php';

$fieldBiodata = [
  "nim" => ["label" => "Nim:", "suffix" => ""],
  "nama" => ["label" => "Nama:", "suffix" => ""],
  "tempat_tinggal" => ["label" => "Tempat_tinggal:", "suffix" => ""],
  "tanggal_lahir" => ["label" => "Tanggal_lahir:", "suffix" => ""],
  "hobi" => ["label" => "Hobi:", "suffix" => ""],
  "pekerjaan" => ["label" => "Pekerjaan:", "suffix" => ""],
  "pasangan" => ["label" => "Pasangan:", "suffix" => ""],
  "orang_tua" => ["label" => "Orang_tua:", "suffix" => ""],
  "kakak" => ["label" => "Kakak:", "suffix" => ""],
  "adik" => ["label" => "Adik:", "suffix" => ""],

];

$sql = "SELECT * FROM tabel_biodata ORDER BY bid DESC";
$q = mysqli_query($conn, $sql);
if (!$q) {
  echo "<p>Gagal membaca data tamu: " . htmlspecialchars(mysqli_error($conn)) . "</p>";
} elseif (mysqli_num_rows($q) === 0) {
  echo "<p>Belum ada data tamu yang tersimpan.</p>";
} else {
  while ($row = mysqli_fetch_assoc($q)) {
    $arrBiodata = [
      "nim"  => $row["bnim"]  ?? "",
      "nama" => $row["bnama"] ?? "",
      "tempat_tinggal" => $row["btempat_tinggal"] ?? "",
      "tanggal_lahir"  => $row["btanggal_lahir"]  ?? "",
      "hobi"  => $row["bhobi"]  ?? "",
      "pekerjaan"  => $row["bpekerjaan"]  ?? "",
      "pasangan"  => $row["bpasangan"]  ?? "",
      "orang_tua"  => $row["borang_tua"]  ?? "",
      "kakak"  => $row["bkakak"]  ?? "",
      "adik"  => $row["badik"]  ?? "",
    ];
    echo tampilkanBiodata($fieldBiodata, $arrBiodata);
  }
}
?>
