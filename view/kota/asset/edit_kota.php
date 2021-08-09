<?php
session_start();
include'../../lib/koneksi.php';
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}
$id_kota = $_POST['id_kota'];
$nama_kota = $_POST['nama_kota'];

mysqli_query($koneksi,"UPDATE tb_kota SET nama_kota='$nama_kota' WHERE id_kota = '$id_kota'");
header("location:../data_kota.php?pesan=update");   
$_SESSION['update'] = "Data Berhasil diubah";
  


?>


