<?php 
// pengulangan pada array
// for / foreach
$angka = [3,2,4,1,15,43,65,43,78,47,32,768,6485];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Latihan 2</title>
 	<style>
 		.kotak {
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		}
 		.clear { clear: both; }
 	</style>
 </head>
 <body>

 <?php for ($i = 0; $i < count($angka); $i++) { ?>
 	<div class="kotak"><?php echo "$angka[$i]"; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
	<div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>
<?php foreach( $angka as $a) : ?>
	<div class="kotak"><?= $a ?></div>
<?php endforeach; ?>
 </body>
 </html>