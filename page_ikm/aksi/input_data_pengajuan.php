<?php
session_start();
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../view/lib/koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {
  $id_kota = $_POST['id_kota'];
  $tanggal=date('d-m-Y');
  $id_ikm=$_SESSION['id_ikm'];
	// membuat variabel untuk menampung data dari form
  $nama_ikm = $_POST['nama'];
  $jenis_produk = $_POST ['jenis_produk'];
  $telp = $_POST['telp'];
  $keterangan = $_POST['keterangan'];
  
  // membuat variabel untuk detail Produk
  $query = "INSERT INTO tb_pengajuan VALUES ('','$id_ikm','$tanggal','$nama_ikm','$jenis_produk','$keterangan','$id_kota','0')";
  $result = mysqli_query($koneksi, $query);
 
 
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));

}
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:../data_pengajuan");
$_SESSION['ubah']="$jenis_produk Berhasil di tambahkan kedalam Antrian";
?>
