<!DOCTYPE html>
<html>
<head>
	<title>Edit Ruangan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
	<h2>Web Reservasi Penginapan</h2>
		<h3>Hotel Batu Suli Palangka Raya</h3>
	</div>

	<br />
	<a href="tabel_ruangan.php"> <button>< Home</button>
	</a>
	
	<h3><font color="White">Edit Data Ruangan</font></h3>
	<form action="proses_updateruangan.php" method="post">
		<?php 
		include "koneksi.php";
		$id = $_GET['id_ruangan'];

		$query = mysqli_query($con, "SELECT * FROM ruangan WHERE id_ruangan = '$id'") or die(mysqli_error($con));
		$data = mysqli_fetch_array($query);
		?>		
		<table>
			<tr>
				<td><font color="White">Nama Ruangan</font></td>
				<td>
					<input type="hidden" name="id_ruangan" value="<?php echo $data['id_ruangan'] ?>">
					<input type="text" name="nama_ruangan" value="<?php echo $data['nama_ruangan'] ?>" required>
				</td>					
			</tr>	
			<tr>
				<td><font color="White">Harga Sewa</font></td>
				<td><input type="text" name="harga_sewa" value="<?php echo $data['harga_sewa'] ?>" required></td>			
			</tr>	
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>

