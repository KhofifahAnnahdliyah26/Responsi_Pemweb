<?php 
include 'koneksi.php';

$id_ruangan = $_GET['id_ruangan'];

$query = mysqli_query($con, "DELETE FROM ruangan WHERE id_ruangan = '$id_ruangan'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='tabel_ruangan.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='tabel_ruangan.php';</script>";
}

?>