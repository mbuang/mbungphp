<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POST</title>
</head>
<body>
	<?php if ( isset($_POST["submit"]) ) :?>
		<h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
	<?php endif; ?>
	
	<form action="latihan4.php" method="post">
		Masukkan nama :
		<input type="text" name="nama">
		<br>
		<button type="submit" name="submit">Kirim!</button>
	</form>

</body>
</html>