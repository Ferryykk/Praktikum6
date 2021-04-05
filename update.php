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
$id = $_POST['id'];
$nama_pegawai = $_POST['nama_pegawai'];
$alamat_pegawai = $_POST['alamat_pegawai'];
$kode_pegawai = $_POST['kode_pegawai'];
$kode_bagian = $_POST['kode_bagian'];
 
// update data ke database
mysqli_query($conn,"update data_pegawai set nama_pegawai='$nama_pegawai', alamat_pegawai='$alamat_pegawai', kode_pegawai='$kode_pegawai', kode_bagian='$kode_bagian' where id_pegawai='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>