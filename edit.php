<?php 	
include('koneksi.php');
$db = new database();
$id = $_GET['id'];
if(! is_null($id))
{
	$daftar_siswa = $db->get_by_id($id);
}
else
{
	header('location:tampil_data.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>p</title>
</head>
<body>
<h3>Update Data siswa</h3>
<hr/>
<form method="post" action="proses_data.php?action=update">
<input type="hidden" name="id" value="<?php echo $daftar_siswa['id']; ?>"/>
<table>
	<tr>
		<td>NIS</td>
		<td>:</td>
		<td><input type="text" name="NIS" value="<?php echo $daftar_siswa['NIS']; ?>"/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="Nama" value="<?php echo $daftar_siswa['Nama']; ?>"/></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><input type="text" name="Kelas" value="<?php echo $daftar_siswa['Kelas']; ?>"/></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td><input type="text" name="Jurusan" value="<?php echo $daftar_siswa['Jurusan']; ?>"/></td>
	</tr>
    <tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="Alamat" value="<?php echo $daftar_siswa['Alamat']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>