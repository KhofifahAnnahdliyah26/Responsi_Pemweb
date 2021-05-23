<!DOCTYPE html>
<html>
<head>
<title>Tambah Data Ruangan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Web Reservasi Penginapan</h2>
		<h3>Hotel Batu Suli Palangka Raya</h3>
	</div>


	<br />
	<a href="index.php">
		<button>< > Home </button>
	</a>

	<h3>Input Data Ruangan</h3>
	<form action="proses_insertruangan.php" method="post">		
		<table>
        	<tr>
				<td>Nama Ruangan</td>
				<td><input type="text" name="nama_ruangan" required></td>					
			</tr>	
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga_sewa" required></td>					
			</tr>	
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>
