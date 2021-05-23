<?php 
include 'koneksi.php';
$id_sewa = $_POST['id_sewa'];
$id_penyewa = $_POST['id_penyewa'];
$total_bayar = $_POST['total_bayar'];
$tanggal_bayar= $_POST['tanggal_bayar'];

$query = mysqli_query($con, "UPDATE header_sewa SET id_sewa= '$id_sewa', id_penyewa='$id_penyewa', total_bayar='$total_bayar', tanggal_bayar='$tanggal_bayar'  WHERE id_sewa='$id_sewa'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); 
    window.location='tabel_header.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

?>