<!DOCTYPE html>
<html>
<head>
<title>Tambah Data Penyewa</title>
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

	<h3>Input Data Penyewa</h3>
	<form action="proses_insertpenyewa.php" method="post">		
		<table>
        <tr>
            <td>Nama penyewa</td>
            <td><input type="text" name="nama_penyewa" required></td>
        </tr>
        	<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" required></td>					
			</tr>	
			<tr>
				<td>no telepon</td>
				<td><input type="number" name="no_telp" required></td>					
			</tr>	
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>
