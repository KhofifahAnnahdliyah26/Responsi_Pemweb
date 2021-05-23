<?php 
include 'koneksi.php';

$id_penyewa = $_POST['id_penyewa'];
$nama_penyewa= $_POST['nama_penyewa'];
$alamat= $_POST['alamat'];
$no_telp= $_POST['no_telp'];

$query = mysqli_query($con, "INSERT INTO penyewa (id_penyewa, nama_penyewa, alamat, no_telp) VALUES ('$id_penyewa','$nama_penyewa', '$alamat', '$no_telp')") 
or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='tabel_penyewa.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

?>