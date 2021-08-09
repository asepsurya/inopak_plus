<?php
session_start();
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../view/lib/koneksi.php';
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}
// mengecek apakah tombol input dari form telah diklik

if (isset($_POST['ubah'])) {
  $id_pengajuan=$_POST['id_pengajuan'];
	// membuat variabel untuk menampung data dari form
  $nama_ikm = $_POST['nama_ikm'];
  $kelas = $_POST ['kelas'];
  $telp = $_POST['telp'];
  $alamat = $_POST['alamat'];
  $gender = $_POST['gender'];
  // membuat variabel untuk Kelengkapan Adm IKM
  $nama_perusahaan = addslashes($_POST['nama_perusahaan']);
  $hallal = $_POST['hallal'];
  $pirt = $_POST['pirt'];
  $legalitas = $_POST['legalitas'];
 // $logo_perusahaan = $_POST['logo_perusahaan'];
  $media_penjualan = $_POST['media_penjualan']; 
  $jenis_kemasan = $_POST['jenis_kemasan']; 
  $kapasitas_produksi = $_POST['kapasitas_produksi']; 
  $omset = $_POST['omset']; 
    // jalankan query INSERT untuk menambah data ke database

    $a = "UPDATE tb_brainstorming SET nama='$nama_ikm',kelas ='$kelas' ,telp ='$telp',alamat='$alamat',gender='$gender' WHERE id_pengajuan = '$id_pengajuan'";
    if(mysqli_query($koneksi, $a)){
      header("location:../detile_produk.php?pengajuan=$id_pengajuan");
      $_SESSION['update']=" Data  Berhasil Diubah";  

    }else{
      header("location:../detile_produk.php?id_pengajuan=$id_pengajuan");
      $_SESSION['gagal']=" Data Gagal Diubah Mohon Periksa Kembali Data Anda";    
    }
    $a = "UPDATE tb_formulir SET nama_perusahaan='$nama_perusahaan', halal='$hallal', pirt='$pirt', media_penjualan='$media_penjualan', legalitas_lainnya='$legalitas',jenis_kemasan='$jenis_kemasan',kapasitas_produk='$kapasitas_produksi',omset='$omset' WHERE id_pengajuan = '$id_pengajuan'";
    if(mysqli_query($koneksi, $a)){
      header("location:../detile_produk.php?id_pengajuan=$id_pengajuan");  
    }else{
      header("location:../detile_produk.php?id_pengajuan=$id_pengajuan");  
    }
    
  }
// melakukan redirect (mengalihkan) ke halaman index.php

?>
