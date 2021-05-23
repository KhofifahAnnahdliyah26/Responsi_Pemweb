<!DOCTYPE html>
<html>
<head>
	<title>Edit Detail Sewa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
	<h2>Web Reservasi Penginapan</h2>
		<h3>Hotel Batu Suli Palangka Raya</h3>
	</div>

	<br />
	<a href="tabel_detail.php"> <button>< Home</button>
	</a>
	
	<h3><font color="White">Edit Data Detail Sewa</font> </h3>
	<form action="proses_updatedetail.php" method="post">
		<?php 
		include "koneksi.php";
		$id = $_GET['id'];

		$query = mysqli_query($con, "SELECT * FROM detail_sewa WHERE id_detail= '$id'") or die(mysqli_error($con));
		$data = mysqli_fetch_array($query);
		?>		
		<table>
			<tr>
				<td><font color="White">ID Ruangan</font></td>
				<td>
					<input type="hidden" name="id_detail" value="<?php echo $data['id_detail'] ?>">
					<input type="text" name="id_ruangan" value="<?php echo $data['id_ruangan'] ?>" required>
				</td>
			</tr>
			<tr>
				<td><font color="White">ID Sewa</font></td>
				<td>
					<input type="text" name="id_sewa" value="<?php echo $data['id_sewa'] ?>" required>
				</td>					
			</tr>	
			<tr>
				<td><font color="White">Lama Sewa</font></td>
				<td>
					<input type="text" name="lama_sewa" value="<?php echo $data['lama_sewa'] ?>" required>
				</td>					
			</tr>	
			<tr>
				<td><font color="White">Biya Sewa</font></td>
				<td><input type="text" name="biaya_sewa" value="<?php echo $data['biaya_sewa'] ?>" required></td>			
			</tr>
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>

