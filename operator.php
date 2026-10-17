<?php


echo "<h3> Operator Aritmatika </h3>";


$a = 10;
$b = 3;


echo "Variabel a = " . $a;
echo "<br>";
echo "Variabel b = " . $b;
echo "<hr>";


$hasil_penjumlahan = $a + $b;
$hasil_pengurangan = $a - $b;
$hasil_perkalian = $a * $b;
$hasil_pembagian = $a / $b;


echo "Hasil dari penjumlahan adalah " . $hasil_penjumlahan . "<br>";
echo "Hasil dari pengurangan adalah " . $hasil_pengurangan . "<br>";
echo "Hasil dari perkalian adalah " . $hasil_perkalian . "<br>";
echo "Hasil dari pembagian adalah " . $hasil_pembagian . "<br>";




echo "<h3> Operator Perbandingan </h3>";


$nilai_uts = 80;
$nilai_kehadiran = 80;


if($nilai_uts >75 && $nilai_kehadiran >= 85){
    echo "Lulus";
}else{
    echo "Tidak Lulus";
}


?>
