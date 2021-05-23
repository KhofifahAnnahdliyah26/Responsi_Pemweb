<?php 
include 'koneksi.php';
$id_detail = $_POST['id_detail'];
$id_ruangan = $_POST['id_ruangan'];
$id_sewa= $_POST['id_sewa'];
$lama_sewa= $_POST['lama_sewa'];
$biaya_sewa= $_POST['biaya_sewa'];

$query = mysqli_query($con, "UPDATE detail_sewa SET  id_ruangan='$ id_ruangan', id_sewa='$id_sewa', lama_sewa='$lama_sewa', biaya_sewa='$biaya_sewa' WHERE id_detail='$id_detail' ") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='tabel_detail.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

?>