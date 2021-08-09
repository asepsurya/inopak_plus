<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../lib/koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
  $id_kota= $_POST['id_kota'];
  $id_user = $_POST ['id_user'];
  $nama_user = $_POST ['nama_user'];
  $username = $_POST ['username'];
  $password = md5($_POST ['password']);
  $level = $_POST ['level'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO user VALUES ('$id_user','$nama_user','$username','$password','$level','$id_kota')";
  $result = mysqli_query($koneksi, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:../data_pengguna?pesan=tambah");
?>
