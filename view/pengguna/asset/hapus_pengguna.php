<?php
// buka koneksi dengan MySQL
  include("../../lib/koneksi.php");

  //mengecek apakah di url ada GET id
  if (isset($_GET["id_user"])) {

    // menyimpan variabel id dari url ke dalam variabel $id
    $id = $_GET["id_user"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM user WHERE id_user='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
    }
  }
  // melakukan redirect ke halaman index.php
  header("location:../data_pengguna.php");
?>
