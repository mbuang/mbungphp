<!-- <?php 
	$mahasiswa = [
		["zam", "01", "zam@gmail.com", "Teknik Komputer "],
		["halim", "02", "halim@gmail.com", "Teknik Kimmia "]
	]
 ?> -->

<!-- Array Associative -->
<!-- Definisinya sama seperti Array, kecuali key-nya adalah string yang kita buat sendiri -->
<?php 
$mahasiswa = [
		[
			"nama" => "Zamrathul Halim",
			"nim" => "5181011022",
			"email" => "zamrathulhalim99@gmail.com",
			"jurusan" => "Teknik Komputer",
			"gambar" => "2.jpg"
		],
		[
			"nama" => "simbung",
			"nim" => "5181011312",
			"email" => "zamlhalim99@gmail.com",
			"jurusan" => "Teknik Kehutanan",
			"gambar" => "1.jpg"
		]
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
 	<?php foreach($mahasiswa as $mhs) : ?>
 		<ul>
 			<li>
 				<img src="img/<?= $mhs["gambar"]; ?> ?>">
 			</li>
 			<li>Nama : <?= $mhs["nama"]; ?></li>
 			<li>NIM : <?= $mhs["nim"]; ?></li>
 			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
 			<li>Email : <?= $mhs["email"]; ?></li>
 		</ul>
 	<?php endforeach; ?>
 
 </body>
 </html>