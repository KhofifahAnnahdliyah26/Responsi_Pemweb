<!DOCTYPE html>
<html>
<head>
<title>Ruangan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Web Reservasi Penginapan</h2>
		<h3>Hotel Batu Suli Palangka Raya</h3>
	</div>

	<br />
	<a href="form_insertruangan.php">
		<button>+Tambah Data Baru</button>
	</a>

	<h3 align="center"><font color="White">Data Ruangan</font></h3>
	<div style="overflow: auto;">
		<table align="center" border="1" class="table">
			<tr>
				<th>No.</th>
                <th>Id Ruangan</th>
                <th>Nama </th>
				<th>Harga sewa</th>
				<th>Opsi</th>		
			</tr>
			<?php 
			include "koneksi.php";
			$query = mysqli_query($con, "SELECT * FROM ruangan") or die(mysqli_error($con));
			$nomor = 1;
			while($data = mysqli_fetch_array($query)) { ?>
				<tr>
					<td align="center"><?php echo $nomor++; ?>.</td>
                    <td><?php echo $data['id_ruangan']; ?></td>
					<td><?php echo $data['nama_ruangan']; ?></td>
					<td><?php echo $data['harga_sewa']; ?></td>
					<td width="90px" align="center">
						<a href="form_updateruangan.php?id_ruangan=<?php echo $data['id_ruangan']; ?>"><button>Edit</button></a> 
						<a href="Deleteruangan.php?id_ruangan=<?php echo $data['id_ruangan']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>					
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

