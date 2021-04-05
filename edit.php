<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<br>
	<a href="index.php">KEMBALI</a>
	<br>
	<br>
	<h3>EDIT DATA pegawai</h3>
 
	<?php
	$host = "localhost"; // Nama hostnya
	$username = "root"; // Username
	$password = "root"; // Password 
	$database = "pegawai"; //nama database

	$conn = mysqli_connect($host, $username , $password, $database); //membuka koneksi ke server MySQL
	// Check Connection
	if (mysqli_connect_errno()) { //jika mySQLI connect error maka tampilkan teks failed connect to MySQL dan menampilkan pesan eror
		echo "Failed to connect to MySQL ". mysqli_connect_error();
	};

	$id = $_GET['id']; //menangkap data id
	$data = mysqli_query($conn,"select * from data_pegawai where id_pegawai='$id'"); //membuat variable data
	while($d = mysqli_fetch_array($data)){//perulangan berisi perintah untuk menampilkan data dari database
		?>
		<form method="post" action="update.php"> <!---membuat form dengan method post, ketika form dikirim akan mengeksekusi file update.php  -->
			<table> <!-- membuat tabel-->
			<tr> <!-- membuat baris -->			
				<td>Nama Pegawai</td> <!--membuat cell pada baris berisi teks Nama Pegawai -->
				<input type="hidden" name="id" value="<?php echo $d['id_pegawai']; ?>"> <!-- membuat input type type hidden yang berisi data id pegawai yang akan dirubah -->
				<td><input type="text" name="nama_pegawai" value="<?php echo $d['nama_pegawai']; ?>"></td> <!--membuat cell berisi input type text -->
			</tr>
			<tr>
				<td>Alamat Pegawai</td> <!--membuat cell pada baris berisi teks departemen -->
				<td><input type="text" name="alamat_pegawai" value="<?php echo $d['alamat_pegawai']; ?>"></td> <!--membuat cell berisi input type text -->
			</tr>
			<tr>
				<td>Kode Pegawai</td> <!--membuat cell pada baris berisi teks departemen -->
				<td><input type="text" name="kode_pegawai" value="<?php echo $d['kode_pegawai']; ?>"></td> <!--membuat cell berisi input type text -->
			</tr>
			<tr>
				<td>Kode Bagian</td> <!--membuat cell pada baris berisi teks departemen -->
				<?php
				if ($d['kode_bagian'] == "A") {?>
				<td>
					<input type="Radio" name="kode_bagian" value="A" checked>Dapur
					<input type="Radio" name="kode_bagian" value="B">Kebersihan
					<input type="Radio" name="kode_bagian" value="C">Kepala Bagian
				</td> <!--membuat cell berisi input type Radio button -->
				<?php }elseif ($d['kode_bagian'] == "B") {?>
				<td>
					<input type="Radio" name="kode_bagian" value="A">Dapur
					<input type="Radio" name="kode_bagian" value="B" checked>Kebersihan
					<input type="Radio" name="kode_bagian" value="C">Kepala Bagian
				</td> <!--membuat cell berisi input type Radio button -->
				<?php }elseif ($d['kode_bagian'] == "C") { ?> 
				<td>
					<input type="Radio" name="kode_bagian" value="A">Dapur
					<input type="Radio" name="kode_bagian" value="B">Kebersihan
					<input type="Radio" name="kode_bagian" value="C" checked>Kepala Bagian
				</td> <!--membuat cell berisi input type Radio button -->
				<?php } ?>

			</tr>
			<tr>
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> <!--membuat input type submit -->
			</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>