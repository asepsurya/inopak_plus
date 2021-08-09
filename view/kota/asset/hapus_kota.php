<?php
session_start();
// buka koneksi dengan MySQL
  include("../../lib/koneksi.php");

  //mengecek apakah di url ada GET id
  if (isset($_GET["id_kota"])) {

    // menyimpan variabel id dari url ke dalam variabel $id
    $id = $_GET["id_kota"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM tb_kota WHERE id_kota='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
    }
  }
  // melakukan redirect ke halaman index.php
  header("location:../data_kota.php?pesan=hapus");
  $_SESSION['update']="Data Berhasil dihapus";
?>
