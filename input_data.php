<!DOCTYPE html>
<html>
<head>
	<title>Belajar CRUD PHP - Create</title>
</head>
<body>
<form action="simpan_data.php" method="post" accept-charset="utf-8">
	<table>
		<tr>
			<td width="150">Kode</td>
			<td width="300"><input type="text" name="kode" value="" placeholder="Kode" size="15"></td>
		</tr>
		<tr>
			<td>Judul Buku</td>
			<td><input type="text" name="judul" value="" placeholder="Judul Buku"></td>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
			<td><input type="text" name="tahun" value="" placeholder=""></td>
		</tr>
		<tr>
			<td>Harga Buku</td>
			<td><input type="text" name="harga" value="" placeholder=""></td>
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