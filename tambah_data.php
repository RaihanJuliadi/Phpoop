<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Siswa</h3>
<hr/>
<form method="post" action="proses_data.php?action=add">
<table>
	<tr>
		<td>NIS</td>
		<td>:</td>
		<td><input type="text" name="NIS"/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="Nama"/></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><input type="text" name="Kelas"/></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td><input type="text" name="Jurusan"/></td>
	</tr>
    <tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="Alamat"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" class="btn btn-primary" name="submit" value="simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>