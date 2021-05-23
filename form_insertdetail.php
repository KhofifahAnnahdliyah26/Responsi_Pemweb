<!DOCTYPE html>
<html>
<head>
	<title>Tambah Kendaraan | Web Pendataan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Web Pendataan Kehilangan Kendaraan Bermotor Roda 2</h2>
		<h3>Polrestabes Semarang</h3>
	</div>

	<br />
	<a href="tabel_detail.php">
		<button>< Home </button>
	</a>

	<h3>Input Data Baru</h3>
	<form action="proses_insertdetail.php" method="post">		
		<table>
			<tr>
				<td>ID Ruangan</td>
				<td><input type="text" name="id_ruangan" required></td>					
			</tr>	
			<tr>
				<td>ID Sewa</td>
				<td><input type="text" name="id_sewa" required></td>					
			</tr>	
			<tr>
				<td>Lama Sewa</td>
				<td><input type="text" name="lama_sewa" required></td>					
			</tr>	
			<tr>
				<td>Biaya Sewa</td>
				<td><input type="number" name="biaya_sewa" required></td>					
			</tr>
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>
