<!DOCTYPE html>
<html>
<head>
<title>Penyewa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Web Reservasi Penginapan</h2>
		<h3>Hotel Batu Suli Palangka Raya</h3>
	</div>


	<br />
	<a href="form_insertpenyewa.php">
		<button>+Tambah Data Baru</button>
	</a>

	<h3 align="center"><font color="White">Data Penyewa</font></h3>
	<div style="overflow: auto;">
		<table align="center" border="1" class="table">
			<tr>
				<th>No.</th>
                <th>Id Penyewa</th>
                <th>Nama</th>
				<th>Alamat</th>
				<th>No telepon</th>
				<th>Opsi</th>		
			</tr>
			<?php 
			include "koneksi.php";
			$query = mysqli_query($con, "SELECT * FROM penyewa") or die(mysqli_error($con));
			$nomor = 1;
			while($data = mysqli_fetch_array($query)) { ?>
				<tr>
					<td align="center"><?php echo $nomor++; ?>.</td>
                    <td><?php echo $data['id_penyewa']; ?></td>
					<td><?php echo $data['nama_penyewa']; ?></td>
					<td><?php echo $data['alamat']; ?></td>
					<td><?php echo $data['no_telp']; ?></td>
					<td width="90px" align="center">
						<a href="form_updatepenyewa.php?id_penyewa=<?php echo $data['id_penyewa']; ?>"><button>Edit</button></a> 
						<a href="Deletepenyewa.php?id_penyewa=<?php echo $data['id_penyewa']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>					
					</td>
				</tr>
			<?php
			} ?>
		</table>
        <br/>
	<a href="index.php">
		<button> >Home</button>
	</a>
	<br />
	</div>
</body>
</html>

