<?php 	
include('koneksi.php');
$db = new database();
$daftar_siswa = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="tambah_data.php">Tambah Data</a>
<br> <br>
<table border="1">
		<tr>
			<th>No</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Jurusan</th>
            <th>Alamat</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($daftar_siswa as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['NIS']; ?></td>
				<td><?php echo $row['Nama']; ?></td>
				<td><?php echo $row['Kelas']; ?></td>
				<td><?php echo $row['Jurusan']; ?></td>
                <td><?php echo $row['Alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id']; ?>">Update</a>
					<a href="proses_data.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>