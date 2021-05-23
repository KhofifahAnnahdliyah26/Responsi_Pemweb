<?php 
include 'koneksi.php';

$id_penyewa = $_GET['id_penyewa'];

$query = mysqli_query($con, "DELETE FROM penyewa WHERE id_penyewa = '$id_penyewa'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='tabel_penyewa.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='tabel_penyewa.php';</script>";
}

?>