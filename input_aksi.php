<?php 
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = "root"; // Password 
$database = "pegawai"; // 

$conn = mysqli_connect($host, $username , $password, $database); //membuka koneksi ke server MySQL
// Check Connection
if (mysqli_connect_errno()) { //jika mySQLI connect error maka tampilkan teks failed connect to MySQL dan menampilkan pesan eror
	echo "Failed to connect to MySQL ". mysqli_connect_error();
};
 
// menangkap data yang di kirim dari form
$nama_pegawai = $_POST['nama_pegawai'];
$alamat_pegawai = $_POST['alamat_pegawai'];
$kode_pegawai = $_POST['kode_pegawai'];
$kode_bagian = $_POST['kode_bagian'];
 
// menginput data ke database
mysqli_query($conn,"insert into data_pegawai values('','$nama_pegawai','$alamat_pegawai','$kode_pegawai','$kode_bagian')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>