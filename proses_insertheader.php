<?php 
include 'koneksi.php';

$id_penyewa= $_POST['id_penyewa'];
$total_bayar= $_POST['total_bayar'];
$tanggal_bayar= $_POST['tanggal_bayar'];

$query = mysqli_query($con, "INSERT INTO header_sewa (id_sewa, id_penyewa, total_bayar, tanggal_bayar) VALUES ('$id_sewa','$id_penyewa', '$total_bayar', '$tanggal_bayar')") 
or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='tabel_header.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

?>