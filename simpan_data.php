<?php 
include 'koneksi.php';

$kode = $_POST['kode'];
$judul	= $_POST['judul'];
$tahun	= $_POST['tahun'];
$harga	= $_POST['harga'];

$cek_data = mysql_query("SELECT * FROM buku WHERE kode = '". $kode ."'");
$num_cek = mysql_num_rows($cek_data);

if($num_cek > 0)
{
	// update data / UPDATE
	$sql = "UPDATE buku SET 
		judul = '". $judul ."',
		tahun = '". $tahun ."',
		harga = '". $harga ."' 
		WHERE kode = '". $kode ."'
	";
}else{
	// input data / CREATE
	$sql = "INSERT INTO buku VALUES (
		'". $kode ."','". $judul ."','". $tahun ."',". $harga .")
	";
}

$kueri = mysql_query($sql);

if($kueri)
{
	header('location:tampil_data.php');
}else{
	echo 'Gagal menyimpan data';
}


 ?>