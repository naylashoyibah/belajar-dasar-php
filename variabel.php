variabel.php
<?php
echo "<h3>Variabel dan tipe data</h3>";


$mata_kuliah = "Pemrograman Internet";
echo $mata_kuliah;
echo "<br>";


//tipe_data
$nama = "Mamba Siti Ali"; // String
$umur = "20"; // Integer
$tinggi = "1.75"; // Float
$benar = "true"; // boolean
$salah = "false"; // boolean
$kosong = "null"; // null


var_dump($nama,$umur,$tinggi);
echo "<br>";


echo "<h3>Penggabungan Variabel</h3>";


$nama_depan = "Mamba";
$nama_tengah = "Siti";
$nama_belakang = "Ali";


echo $nama_depan . " " . $nama_tengah . " " . $nama_belakang;


?>
