<?php
include 'koneksi.php';
if(isset($_GET['kode']))
{
	$kode = $_GET['kode'];
}else{
	$kode = '';
}

$kueri = mysql_query("SELECT * FROM buku WHERE kode ='". $kode ."'");
$jml = mysql_num_rows($kueri);

if($jml>0){
	$getdata = mysql_fetch_array($kueri);
	$judul = $getdata['judul'];
	$tahun = $getdata['tahun'];
	$harga = $getdata['harga'];
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Belajar CRUD PHP - Update</title>
</head>
<body>
<form action="simpan_data.php" method="post" accept-charset="utf-8">
	<table>
		<tr>
			<td width="150">Kode</td>
			<td width="300"><input type="text" name="kode" value="<?php echo $kode ?>" placeholder="Kode" size="15"> * Jangan diganti</td>
		</tr>
		<tr>
			<td>Judul Buku</td>
			<td><input type="text" name="judul" value="<?php echo $judul ?>" placeholder="Judul Buku"></td>
		</tr>
		<tr>
			<td>Tahun Terbit</td> 
			<td><input type="text" name="tahun" value="<?php echo $tahun ?>" placeholder="" size="5"></td>
		</tr>
		<tr>
			<td>Harga Buku</td>
			<td><input type="text" name="harga" value="<?php echo $harga ?>" placeholder="" size="10"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="simpan" value="Simpan">
				<input type="reset" name="reset" value="Ulang">
			</td>
		</tr>
	</table>
</form>
</body>
</html>