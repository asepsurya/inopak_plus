<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../lib/koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
  $id_kota= $_POST['id_kota'];
  $nama_kota = $_POST ['nama_kota'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO tb_kota VALUES ('','$id_kota','$nama_kota')";
  $result = mysqli_query($koneksi, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:../data_ukm.php?pesan=berhasil&id_kota=$id_kota");
?>
