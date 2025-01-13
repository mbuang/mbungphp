<?php 
$mahasiswa = [
	["Zamrathul Halim", "5181011022", "Teknik Komputer", "zamrathulhalim99@gmail.com"],
	["simbuang", "5161011023", "Teknik Informatika", "simbuanghanyuik49@gmail.com"],
	["hanyuik", "5161051023", "Teknik Informatika", "simbuanghanyuik49@gmail.com"]
];


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>

 	<?php foreach( $mahasiswa as $mhs) : ?>
 	<ul>
 		<li>Nama : <?= $mhs[0];  ?></li>
 		<li>NIM : <?= $mhs[1];  ?></li>
 		<li>Jurusan : <?= $mhs[2];  ?></li>
 		<li>Email : <?= $mhs[3];  ?></li>
 	</ul>
 	<?php endforeach; ?>
 </body>
 </html>