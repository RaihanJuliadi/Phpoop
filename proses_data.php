<?php 
include('koneksi.php');
$koneksi = new database();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['NIS'],$_POST['Nama'],$_POST['Kelas'],$_POST['Jurusan'],$_POST['Alamat']);
	header('location:tampil_data.php');
}
elseif($action == "update")
{
	$koneksi->update_data($_POST['NIS'],$_POST['Nama'],$_POST['Kelas'],$_POST['Jurusan'],$_POST['Alamat'],$_POST['id']);
	header('location:tampil_data.php');
}
elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data($id);
	header('location:tampil_data.php');
}
?>