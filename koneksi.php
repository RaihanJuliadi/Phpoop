<?php 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "belajar_crud";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from daftar_siswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

    function tambah_data($NIS,$Nama,$Kelas,$Jurusan,$Alamat)
	{
		mysqli_query($this->koneksi,"insert into daftar_siswa values ('','$NIS','$Nama','$Kelas','$Jurusan','$Alamat')");
	}

    function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from daftar_siswa where id='$id'");
		return $query->fetch_array();
	}

    function update_data($NIS,$Nama,$Kelas,$Jurusan,$Alamat,$id)
	{
		$query = mysqli_query($this->koneksi,"update daftar_siswa set NIS='$NIS',Nama='$Nama',Kelas='$Kelas',Jurusan='$Jurusan',Alamat='$Alamat' where id='$id'");
	}

    function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from daftar_siswa where id='$id'");
	}
}
?>