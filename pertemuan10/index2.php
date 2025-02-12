<?php 
// Koneksi database
$conn = mysqli_connect("localhost","root", "", "phpdasar");

// ambil data dari tabel mahasiswa/ query data mahasiswa

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data mahasiswa dari object result

//  mysqli_fetch_row // mengembalikan array numeric
// $mhs = mysqli_fetch_row($result);

// mysqli_fecth_assoc() // mengembalikan array assocsiative
// $mhs = mysqli_fetch_assoc($result);

// mysqli_fetch_array() // mengembalikan array numeric dan associative
// while( $mhs = mysqli_fetch_assoc($result)) {
// 	var_dump($mhs);
// }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>


	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>

		<?php $i =1; ?>
		<?php while( $row = mysqli_fetch_assoc($result)) :  ?>
		<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="">Ubah</a>
			<a href="">Hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"]; ?>"></td>
		<td><?= $row["nim"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
		</tr>
		<?php $i++; ?>
	<?php endwhile; ?>

	</table>

</body>
</html>