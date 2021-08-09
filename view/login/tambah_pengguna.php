<?php

session_start();
// memanggil file koneksi.php untuk melakukan koneksi database
include '../lib/koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
  $id_kota= $_POST['id_kota'];
  $nama_depan = $_POST ['nm_depan'];
  $nama_belakang = $_POST ['nm_belakang'];
  $username = $_POST ['username'];
  $password = md5($_POST ['password']);
  $password2 = md5($_POST ['password2']);
  $telp = $_POST ['telp'];


if($password == $password2){
  
  $data1 = mysqli_query($koneksi,"select * from user where username='$username'");
  $cek = mysqli_num_rows($data1);
// cek apakah username dan password di temukan pada database
        if($cek > 0){
          header("location:login?pesan=sudah_ada");

        }else{
         // jalankan query INSERT untuk menambah data ke database
        $query = "INSERT INTO user VALUES ('','$nama_depan $nama_belakang','$username','$password2','2','$id_kota','a.jpg','0')";
        $result = mysqli_query($koneksi, $query);
        
          header("location:login?pesan=tambah");
        // periska query apakah ada error
        if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
          }
        }
 
  }else{
    header("location:login?pesan=tidaksama");
  }
  
}
$_SESSION['username'] = $username ;

// melakukan redirect (mengalihkan) ke halaman index.php

?>
