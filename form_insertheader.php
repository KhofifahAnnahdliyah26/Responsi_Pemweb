<!DOCTYPE html>
<html>
<head>
<title>Tambah Data Header Sewa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Web Reservasi Penginapan</h2>
		<h3>Hotel Batu Suli Palangka Raya</h3>
	</div>


	<br />
	<a href="tabel_header.php">
		<button> > Home </button>
	</a>

	<h3>Input Data Header Sewa</h3>
	<form action="proses_insertheader.php" method="post">		
		<table>
        	<tr>
				<td>ID Penyewa</td>
				<td><input type="text" name="id_penyewa" required></td>					
			</tr>	
			<tr>
				<td>Total Bayar</td>
				<td><input type="number" name="total_bayar" required></td>					
			</tr>	
            <tr>
				<td>Tanggal Bayar</td>
				<td><input type="date" name="tanggal_bayar" required></td>					
			</tr>	
            	<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>
