<?php 
include 'koneksi.php';

$id_ruangan = $_POST['id_ruangan'];
$nama_ruangan= $_POST['nama_ruangan'];
$harga_sewa= $_POST['harga_sewa'];

$query = mysqli_query($con, "INSERT INTO ruangan (id_ruangan, nama_ruangan, harga_sewa) VALUES ('$id_ruangan','$nama_ruangan', '$harga_sewa')") 
or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='tabel_ruangan.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

?>