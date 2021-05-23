<!DOCTYPE html>
<html>
<head>
	<title>Edit Penyewa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
	<h2>Web Reservasi Penginapan</h2>
		<h3>Hotel Batu Suli Palangka Raya</h3>
	</div>

	<br />
	<a href="tabel_penyewa.php"> <button>< Home</button>
	</a>
	
	<h3><font color="White">Edit Data Penyewa</font></h3>
	<form action="proses_updatepenyewa.php" method="post">
		<?php 
		include "koneksi.php";
		$id = $_GET['id_penyewa'];

		$query = mysqli_query($con, "SELECT * FROM penyewa WHERE id_penyewa = '$id'") or die(mysqli_error($con));
		$data = mysqli_fetch_array($query);
		?>		
		<table>
			<tr>
				<td><font color="White">Alamat</font></td>
				<td>
					<input type="hidden" name="id_penyewa" value="<?php echo $data['id_penyewa'] ?>">
					<input type="text" name="nama_penyewa" value="<?php echo $data['nama_penyewa'] ?>" required>
				</td>					
			</tr>	
			<tr>
				<td><font color="White">Alamat</font></td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" required></td>			
			</tr>
			<tr>
				<td><font color="White">No telepon</font></td>
				<td><input type="text" name="no_telp" value="<?php echo $data['no_telp'] ?>" required></td>			
			</tr>	
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>

