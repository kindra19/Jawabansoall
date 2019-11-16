<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'Penjualan';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$table_name = 'Product';

$sql = 'CREATE TABLE IF NOT EXISTS `' . $table_name . '` (
		  `id` int(3) NOT NULL AUTO_INCREMENT,
		  `name` varchar(20) NOT NULL,
		  `tgl_category` int(3) NOT NULL,
		  `kuantitas` tinyint(4) NOT NULL,
		  `id_cashier` int(11) NOT NULL,
		   PRIMARY KEY (`id`),
		  KEY `id` (`name`)
		) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('ERROR: Tabel ' . $table_name . ' gagal dibuat: ' . mysqli_error($conn));
}

echo 'Tabel ' . $table_name . ' berhasil dibuat <br/>';

$sql = "INSERT INTO `$table_name` (`id`, `name`, `price`, `id_category`, `id_cashier`) 
		VALUES (1, 'Latte', 10000, 2, 1),
				(2, 'Cake', 20000', 1,  2),
				(3, 'Pizza', 50000, 1, 3)";
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('ERROR: Data gagal dimasukkan pada tabel ' . $table_name . ': ' . mysqli_error($conn));
}

echo 'Data berhasil dimasukkan pada tabel ' . $table_name . '';


?>