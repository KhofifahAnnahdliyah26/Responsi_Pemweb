<!DOCTYPE html>
<html>
<head>
	<title>Edit <Header></Header></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
	<h2>Web Reservasi Penginapan</h2>
		<h3>Hotel Batu Suli Palangka Raya</h3>
	</div>

	<br />
	<a href="tabel_header.php"> <button>< Home</button>
	</a>
	
	<h3><font color="White">Edit Data Header Bayar</font> </h3>
	<form action="proses_updateheader.php" method="post">
		<?php 
		include "koneksi.php";
		$id = $_GET['id'];

		$query = mysqli_query($con, "SELECT * FROM header_sewa WHERE id_sewa = '$id'") or die(mysqli_error($con));
		$data = mysqli_fetch_array($query);
		?>		
		<table>
			<tr>
				<td><font color="White">ID Penyewa</font></td>
				<td>
					<input type="hidden" name="id_sewa" value="<?php echo $data['id_sewa'] ?>">
					<input type="text" name="id_penyewa" value="<?php echo $data['id_penyewa'] ?>">
				</td>
			</tr>
			<tr>
				<td><font color="White">Total Bayar</font></td>
				<td>
					<input type="text" name="total_bayar" value="<?php echo $data['total_bayar'] ?>" required>
				</td>					
			</tr>	
			<tr>
				<td><font color="White">Tanggal Bayar</font></td>
				<td><input type="text" name="tanggal_bayar" value="<?php echo $data['tanggal_bayar'] ?>" required></td>			
			</tr>
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>

