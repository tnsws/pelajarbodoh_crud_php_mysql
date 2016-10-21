<?php 
include 'koneksi.php';

$kode = $_GET['kode'];

$sql = "DELETE FROM buku WHERE kode = '". $kode ."'";
$kueri = mysql_query($sql);

if($kueri)
{
	header('location:tampil_data.php');
}else{
	echo 'Data gagal dihapus';
}

 ?>