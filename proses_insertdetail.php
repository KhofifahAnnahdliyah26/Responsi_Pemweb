<?php 
include 'koneksi.php';

$id_ruangan = $_POST['id_ruangan'];
$id_sewa= $_POST['id_sewa'];
$lama_sewa= $_POST['lama_sewa'];
$biaya_sewa= $_POST['biaya_sewa'];

$query = mysqli_query($con, "INSERT INTO detail_sewa (id_ruangan, id_sewa, lama_sewa, biaya_sewa) VALUES ('$id_ruangan', '$id_sewa', '$lama_sewa', '$biaya_sewa')") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='tabel_detail.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
?>