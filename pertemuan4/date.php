<?php 
 // menampilkan tanggal dan format tertentu
 // echo date("l, d-M-Y");

// UNIX Timestamp /EPOCH TIME detik sejak 1 januari 1970
// echo time();
// echo date("l", time()+60*60*24*100);
// mktime
// membuat detik yang sudah berlalu
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,9,28,1999));
// st
// strtotime

echo strtotime("28 sep 1999");
 ?>