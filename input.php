<html>
<head>
</head>
<body>
	<br>
	<a href="index.php">KEMBALI</a> <!-- memasukan link kedalam teks kembali-->
	<br>
	<br>
	<h3>TAMBAH DATA pegawai</h3>
	<form method="post" action="input_aksi.php"> <!--membuat form dengan method post, ketika form dikirim akan mengeksekusi file input_aksi.php -->
		<table> <!-- membuat tabel-->
			<tr> <!-- membuat baris -->			
				<td>Nama Pegawai</td> <!--membuat cell pada baris berisi teks Nama Pegawai -->
				<td><input type="text" name="nama_pegawai"></td> <!--membuat cell berisi input type text -->
			</tr>
			<tr>
				<td>Alamat Pegawai</td> <!--membuat cell pada baris berisi teks departemen -->
				<td><input type="text" name="alamat_pegawai"></td> <!--membuat cell berisi input type text -->
			</tr>
			<tr>
				<td>Kode Pegawai</td> <!--membuat cell pada baris berisi teks departemen -->
				<td><input type="text" name="kode_pegawai"></td> <!--membuat cell berisi input type text -->
			</tr>
			<tr>
				<td>Kode Bagian</td> <!--membuat cell pada baris berisi teks departemen -->
				<td>
					<input type="Radio" name="kode_bagian" value="A" checked>Dapur
					<input type="Radio" name="kode_bagian" value="B">Kebersihan
					<input type="Radio" name="kode_bagian" value="C">Kepala Bagian
				</td> <!--membuat cell berisi input type Radio button -->
			</tr>
			<tr>
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> <!--membuat input type submit -->
			</tr>		
		</table>
	</form>
</body>
</html>