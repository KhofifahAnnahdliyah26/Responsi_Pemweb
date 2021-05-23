<!DOCTYPE html>
<html>
<head>
<title>Header Sewa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Web Reservasi Penginapan</h2>
		<h3>Hotel Batu Suli Palangka Raya</h3>
	</div>


	<br />
	<a href="form_insertheader.php">
		<button>+Tambah Data Baru</button>
	</a>

	<h3 align="center"><font color="White">Data Header Sewa</font></h3>
	<div style="overflow: auto;">
		<table align="center" border="1" class="table">
			<tr>
				<th>No.</th>
                <th>Id Sewa</th>
                <th>Id Penyewa</th>
				<th>Total Bayar</th>
				<th>Tanggal Bayar</th>
				<th>Opsi</th>		
			</tr>
			<?php 
			include "koneksi.php";
			$query = mysqli_query($con, "SELECT *FROM header_sewa") or die(mysqli_error($con));
			$nomor = 1;
			while($data = mysqli_fetch_array($query)) { ?>
				<tr>
					<td align="center"><?php echo $nomor++; ?>.</td>
                    <td><?php echo $data['id_sewa']; ?></td>
                    <td><?php echo $data['id_penyewa']; ?></td>
					<td><?php echo $data['total_bayar']; ?></td>
					<td><?php echo $data['tanggal_bayar']; ?></td>
					<td width="90px" align="center">
						<a href="form_updateheader.php?id=<?php echo $data['id_sewa']; ?>"><button>Edit</button></a> 
						<a href="Deleteheader.php?id=<?php echo $data['id_sewa']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>					
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

