<?php 
// cek apakah data tidak ada di $_GET
if( !isset($_GET["nama"]) || 
	!isset($_GET["nim"])) ||
	!isset($_GET["email"]) ||
	!isset($_GET["jurusan"]) ||
	!isset($_GET["gambar"]) || {
	// redirect
	header("Location: latihan1.php");
	exit;
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Mahasiswa</title>
</head>
<body>
<ul>
	<li><img src="img/<?= $_GET["gambar"]; ?>"></li>
	<li>Nama : <?= $_GET["nama"]; ?></li>
	<li>NIM : <?= $_GET["nim"]; ?></li>
	<li>Email : <?= $_GET["email"]; ?></li>
	<li>Jurusan : <?= $_GET["jurusan"]; ?></li>
</ul>
<a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>