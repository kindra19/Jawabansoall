<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'Penjualan';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$table_name = 'Category';

$sql = 'CREATE TABLE IF NOT EXISTS `' . $table_name . '` (
		  `id` int(2) NOT NULL AUTO_INCREMENT,
		  `name` varchar(20) NOT NULL,
		   PRIMARY KEY (`id`),
		  KEY `id` (`name`)
		) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('ERROR: Tabel ' . $table_name . ' gagal dibuat: ' . mysqli_error($conn));
}

echo 'Tabel ' . $table_name . ' berhasil dibuat <br/>';

$sql = "INSERT INTO `$table_name` (`id`, `name`) 
		VALUES (1, 'food'),
				(2, 'drink')";
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('ERROR: Data gagal dimasukkan pada tabel ' . $table_name . ': ' . mysqli_error($conn));
}

echo 'Data berhasil dimasukkan pada tabel ' . $table_name . '';


?>