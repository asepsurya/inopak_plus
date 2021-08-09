<?php
session_start();
include'../../lib/koneksi.php';
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}
$id_pengajuan = $_GET['id_pengajuan'];
$id_ikm=$_GET['id_ikm'];

mysqli_query($koneksi,"UPDATE tb_pengajuan SET status='1' WHERE id_pengajuan_new = '$id_pengajuan'");
mysqli_query($koneksi,"DELETE FROM tb_cek WHERE id_ikm = '$id_ikm'");
header("location:../data_pengajuan");   
$_SESSION['update'] = "Data Berhasil diubah";
  


?>


