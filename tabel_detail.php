<!DOCTYPE html>
<html>
<head>
<title>Detail sewa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Web Reservasi Penginapan</h2>
		<h3>Hotel Batu Suli Palangka Raya</h3>
	</div>


	<br />
	<a href="form_insertdetail.php">
		<button>+Tambah Data Baru</button>
	</a>

	<h3 align="center"><font color="White">Data Detail Sewa</font></h3>
	<div style="overflow: auto;">
		<table align="center" border="1" class="table">
			<tr>
				<th>No.</th>
                <th>Id Detail</th>
                <th>Id Ruangan</th>
				<th>Id Sewa</th>
				<th>Lama Sewa</th>
				<th>Biaya Sewa</th>
				<th>Opsi</th>		
			</tr>
			<?php 
			include "koneksi.php";
			$query = mysqli_query($con, "SELECT * FROM detail_sewa") or die(mysqli_error($con));
			$nomor = 1;
			while($data = mysqli_fetch_array($query)) { ?>
				<tr>
					<td align="center"><?php echo $nomor++; ?>.</td>
                    <td><?php echo $data['id_detail']; ?></td>
					<td><?php echo $data['id_ruangan']; ?></td>
					<td><?php echo $data['id_sewa']; ?></td>
					<td><?php echo $data['lama_sewa']; ?></td>
                    <td><?php echo $data['biaya_sewa']; ?></td>
					<td width="90px" align="center">
						<a href="form_updatedetail.php?id=<?php echo $data['id_detail']; ?>"><button>Edit</button></a> 
						<a href="Deletedetail.php?id_detail=<?php echo $data['id_detail']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>					
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

