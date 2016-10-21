<?php
$database 	= "pelajarbodoh";
$hostname 	= 'localhost';
$userhost	= 'root';
$passhost	= '';

$koneksi = mysql_pconnect($hostname, $userhost, $passhost);
if ($koneksi) {
	mysql_select_db($database, $koneksi);
}else{
	echo '<strong><em>Tidak dapat menyambungkan ke database.</em></strong> <br>';
}
?>