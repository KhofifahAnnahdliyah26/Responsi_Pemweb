<?php 
include 'koneksi.php';
$id_penyewa = $_POST['id_penyewa'];
$nama_penyewa = $_POST['nama_penyewa'];
$alamat= $_POST['alamat'];
$no_telp= $_POST['no_telp'];

$query = mysqli_query($con, "UPDATE penyewa SET id_penyewa='$id_penyewa', nama_penyewa='$nama_penyewa', alamat='$alamat', no_telp='$no_telp'  WHERE id_penyewa='$id_penyewa'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); 
    window.location='tabel_penyewa.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

?>