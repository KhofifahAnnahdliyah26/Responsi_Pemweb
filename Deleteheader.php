<?php 
include 'koneksi.php';

$id_sewa = $_GET['id_sewa'];

$query = mysqli_query($con, "DELETE FROM header_sewa WHERE id_sewa = '$id_sewa'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='tabel_header.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='tabel_header.php';</script>";
}

?>