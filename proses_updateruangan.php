<?php 
include 'koneksi.php';
$id_ruangan = $_POST['id_ruangan'];
$nama_ruangan = $_POST['nama_ruangan'];
$harga_sewa = $_POST['harga_sewa'];
$query = mysqli_query($con, "UPDATE ruangan SET id_ruangan='$id_ruangan', nama_ruangan='$nama_ruangan', harga_sewa='$harga_sewa'  WHERE id_ruangan='$id_ruangan'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); 
    window.location='tabel_ruangan.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

?>rp