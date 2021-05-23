<?php 
include 'koneksi.php';

$id_detail = $_GET['id_detail'];

$query = mysqli_query($con, "DELETE FROM detail_sewa WHERE id_detail = '$id_detail'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='tabel_detail.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='tabel_detail.php';</script>";
}

?>