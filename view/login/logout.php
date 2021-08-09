<?php 
// mengaktifkan session
session_start();
include '../lib/koneksi.php';
$username=$_SESSION['username'];
//untuk mengupdate field online menjadi 0
$update = mysqli_query($koneksi,"UPDATE user SET online='0' WHERE username='$username'");
// menghapus semua session
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
header("location:login.php?pesan=logout",true, 301);
?>