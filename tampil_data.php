<?php
include 'koneksi.php';

$readtabel = mysql_query("SELECT * FROM buku ORDER BY kode");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Belajar CRUD PHP - Read</title>
</head>
<body>
<h1>Menampilkan data dari database - Read</h1>
<hr>
<a href="input_data.php" title="Tambah Data" style="text-decoration:none; border:1px #000 solid; background-color: green; color:#000; padding: 5px 15px; text-align:center;">Tambah Data</a>
<hr>
<table border="1" cellspacing="0" cellpadding="2">
	<caption>Data Buku</caption>
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Buku</th>
			<th>Judul Buku</th>
			<th>Tahun Terbit</th>
			<th>Harga</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		while ($getdata = mysql_fetch_array($readtabel)) { 
			?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $getdata['kode'] ?></td>
			<td><?php echo $getdata['judul'] ?></td>
			<td><?php echo $getdata['tahun'] ?></td>
			<td>Rp. <?php echo $getdata['harga'] ?>,00</td>
			<td>
				<a href="update_data.php?kode=<?php echo $getdata['kode'] ?>" title="Update">Update</a> | 
				<a href="hapus_data.php?kode=<?php echo $getdata['kode'] ?>" title="Hapus" onclick="return confirm('Hapus buku ini?')">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</body>
</html>