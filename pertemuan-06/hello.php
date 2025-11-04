<!DOCTYPE html>
<html>
<head>
<title>Belajar PHP Dasar</title>
</head>
<body>
<h1><?php echo "Halo, Dunia PHP!"; ?></h1>
</body>
</html>
<?php
$nama = "Deskia";
$umur = 18;
$tinggi = 1.50;
$aktif = true;
echo "Nama: $nama <br>";
echo "Umur: $umur tahun <br>";
echo "Tinggi: $tinggi meter <br>";
echo "Status aktif: " . ($aktif ? "Ya" : "Tidak") . "<br>";
var_dump($nama);
var_dump($umur);
var_dump($tinggi);
var_dump($aktif);
?>

<?php
$nama = "Deskia Adminitasari";
$umur = 18;
$tinggi = 1.50;
$aktif = true;
$hobi = ["make up", "Memasak"];
$mahasiswa = (object)[
"nim" => "2511500003",
"nama" => "Deskia Adminitasari",
"prodi" => "Teknik Informatika"
];
$nilai_akhir = NULL;
echo "<h2>Demo Tipe Data PHP</h2>";
echo "<pre>";
echo "String:\n";
var_dump($nama);
echo "\nInteger:\n";
var_dump($umur);
echo "\nFloat:\n";
var_dump($tinggi);
echo "\nBoolean:\n";
var_dump($aktif);
echo "\nArray:\n";
var_dump($hobi);
echo "\nObject:\n";
var_dump($mahasiswa);

echo "\nNULL:\n";
var_dump($nilai_akhir);
echo "</pre>";
?>

<?php
define("KAMPUS", "ISB Atma Luhur");
const ANGKATAN = 2025;
echo "Kampus: " . KAMPUS . "<br>";
echo "Angkatan: " . ANGKATAN;
?>