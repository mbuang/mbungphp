<?php 
function salam($waktu, $nama){
	return "Selamat $waktu, $nama!";
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Latihan Function</title>
 </head>
 <body>
 	<h1><?= salam("pagi", "Zamrathul"); ?></h1>
 </body>
 </html>