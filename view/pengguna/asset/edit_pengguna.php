<?php
include'../../lib/koneksi.php';
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}
$id_kota = $_POST['id_user'];
$nama_pengguna=$_POST['nama_pengguna'];
$password = md5($_POST['pass2']);
$password1 = md5($_POST['pass1']);
if($password == $password1){
    $result= mysqli_query($koneksi,"UPDATE user SET nama='$nama_pengguna',password='$password' WHERE id_user = '$id_kota'");
    if ($result > 0){
        header("location:../data_pengguna.php?pesan=tambah");
    }else{
        header("location:../data_pengguna.php?pesan=gagal_tambah"); 
    }
}else{
    header("location:../data_pengguna.php?pesan=tidaksama");
}

?>


