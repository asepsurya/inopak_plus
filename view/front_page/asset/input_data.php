<?php
session_start();
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../lib/koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {
  $id_kota = $_POST['id_kota'];
  $tanggal=date('d-m-Y');
  $id_ikm=$_POST['id_ikm'];
	// membuat variabel untuk menampung data dari form
  $nama_ikm = addslashes($_POST['nama_ikm']);
  $kelas = $_POST ['kelas'];
  $telp = $_POST['telp'];
  $alamat = $_POST['alamat'];
  $gender = $_POST['gender'];
  // membuat variabel untuk detail Produk
  $varian = addslashes($_POST['varian']);
  $jenis_produk = addslashes($_POST['jenis_produk']);
  $merek=addslashes($_POST['merek']);
  $tagline=$_POST['tagline'];
  $kelebihan= $_POST['kelebihan_produk'];
  $segmen = $_POST['segmen'];
  $gramasi = $_POST['gramasi'];
  $harga = $_POST['harga'];
  $kapasitas_produksi = $_POST['kapasitas_produksi'];
  $omset = $_POST['omset'];
  $komposisi1 = $_POST['komposisi'];
  $redaksi = $_POST['redaksi'];
  $keterangan = addslashes($_POST['keterangan']);
  // membuat variabel untuk Kelengkapan Adm IKM
  $nama_perusahaan = addslashes($_POST['nama_perusahaan']);
  $hallal = $_POST['hallal'];
  $pirt = $_POST['pirt'];
  $legalitas = $_POST['legalitas'];
 // $logo_perusahaan = $_POST['logo_perusahaan'];
  $media_penjualan = $_POST['media_penjualan']; 
    // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO tb_ukm VALUES ('$id_ikm','adm782924249','$nama_ikm', '$alamat','$gender','$kelas','$telp')";
  $result = mysqli_query($koneksi, $query);
  $query = "INSERT INTO tb_formulir VALUES ('','$tanggal','$id_ikm', '$jenis_produk', '$merek','$komposisi1','$varian','$kelebihan','$tagline','$gramasi','','$harga','$kapasitas_produksi','$omset','$segmen','','$nama_perusahaan','$hallal', '$pirt', '$legalitas','$media_penjualan','$redaksi','$keterangan')";
  $result = mysqli_query($koneksi, $query);
 
  $_SESSION['update']="$nama_ikm Berhasil ditambahkan";
 
 
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));

}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:../../data_ukm/formulir");
?>
