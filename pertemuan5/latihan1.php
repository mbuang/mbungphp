<?php 
// array
// variabel yang dapat memiliki banyak nilai
// membuat array cara lama
// pasangan antara key dan value
// key nya dimulai dari 0
// elemen array boleh memiliki tipe data berbeda
$hari = array("Senin","Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123,"tulisan", false];

 //menampilkan array 
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// menampilkan 1 elemen pada array
// echo "<br>";
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];


// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);

 ?>
