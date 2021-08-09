<?php
include '../../lib/koneksi.php';
 if (isset($_POST['ubah'])) {
  //buat folder bernama gambar
  $tempdir = "../../upload/"; 
  $id_ikm= $_POST['id_ikm'];
        if (!file_exists($tempdir))
        mkdir($tempdir,0755); 
        //gambar akan di simpan di folder gambar
        $target_path = $tempdir . basename($_FILES['filegambar']['name']);

        //nama gambar
        $nama_gambar=$_FILES['filegambar']['name'];
        //ukuran gambar
        $ukuran_gambar = $_FILES['filegambar']['size']; 

        $fileinfo = @getimagesize($_FILES["filegambar"]["tmp_name"]);
        //lebar gambar
        $width = $fileinfo[0];
        //tinggi gambar
        $height = $fileinfo[1]; 
       
            if (move_uploaded_file($_FILES['filegambar']['tmp_name'], $target_path)) {
                
                $sql=mysqli_query("UPDATE user SET gambar='".$nama_gambar."' WHERE id_ikm='$id_ikm'");
                header("location:../detile_produk.php?id_ukm=$id_ikm&pesan=ubah");   
            } else {
                header("location:../detile_produk.php?id_ukm=$id_ikm&pesan=gagal");   
            }
        
 }
?>