<?php 
// Pertemun 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo(bisa pakai kutip 1 dan 2), print
// print_r
// var_dump menampilkan informasi tipe data dan berapa ukurannya

// penulisan sintaks php
// 1. PHP di dalam PHP
// 2. HTML di dalam PHP


// Variabel dan tipe data
// Variabel
// tidak boleh diawali dengan angka tapi boleh mengandung angka
// $nama ="ZamrathulH";
// echo "Halo, nama saya $nama";

// Operator
// arirmatika
// + * - / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabugn string /concatination / concat
// .
// $nama_depan = "Zamrathul ";
// $nama_belakang = "Halim";
// echo $nama_depan . " " .$nama_belakang;
// 
// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;

// $nama = "Zamrathul";
// $nama .= " ";
// $nama .= "Halim";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// %%,||, !
$x = 30;
var_dump($x <20 || $x % 2 == 0 );
?>
