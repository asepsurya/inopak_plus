
    <?php 
		//buka file rtf
    
	include '../view/lib/koneksi.php';
	$id_pengajuan=$_GET['id_pengajuan'];
	
$tpl_file = "tempelate_brainstorming.rtf";
 if (file_exists($tpl_file)) {
// Alamat file hasil parser
$target = "download/Form_Brainstorming".$id_pengajuan.".rtf";


// Membuka file template
$f = fopen($tpl_file, "r+");
$hasilbaca = fread($f, filesize($tpl_file)); 
fclose($f);

// Query menampilkan data
$sql_data= "SELECT * FROM tb_brainstorming where id_pengajuan='$id_pengajuan'";

$qry_data = mysqli_query($koneksi, $sql_data) or die ("Gagal query pribadi");

$data3 = mysqli_fetch_array($qry_data)

or die ("Gagal mendapatkan data".mysqli_error());

		$data_jenis_produk=$data3['jenis_produk'];
		$data_nama_ikm = $data3['nama'];
		$data_telp = $data3['telp'];
		$data_merk = $data3['merek'];
		$data_varian= $data3['varian_rasa'];
		$data_komposisi = $data3['komposisi'];
		$data_gramasi = $data3['gramasi'];
		$data_a = $data3['gramasi_new'];
		$data_kelebihan = $data3['kelebihan_produk'];
		$data_segmentasi = $data3['segmentasi'];
		$data_jenis_kemasan = $data3['jenis_kemasan'];
		$data_nama_perusahaan = $data3['nama_perusahaan'];
		$data_halal = $data3['halal'];
		$data_pirt = $data3['pirt'];
		$data_legalitas = $data3['legalitas_lainnya'];
		$data_kapasitas = $data3['kapasitas_produk'];
		$data_media_promosi = $data3['media_penjualan'];
		$data_tanggal_cetak = date("d-m-Y");

// Menempatkan data pribadi kedalam template
$hasilbaca = str_replace("data_Jenis_produk", $data_jenis_produk, $hasilbaca);
$hasilbaca = str_replace("data_nama_ikm", $data_nama_ikm, $hasilbaca);
$hasilbaca = str_replace("data_telp", $data_telp, $hasilbaca);
$hasilbaca = str_replace("data_merk", $data_merk, $hasilbaca);
$hasilbaca = str_replace("data_varian", $data_varian, $hasilbaca);
$hasilbaca = str_replace("data_komposisi", $data_komposisi, $hasilbaca);
$hasilbaca = str_replace("data_gramasi", $data_gramasi, $hasilbaca);
$hasilbaca = str_replace("my_data", $data_a, $hasilbaca);
$hasilbaca = str_replace("data_kelebihan", $data_kelebihan, $hasilbaca);
$hasilbaca = str_replace("data_segmentasi", $data_segmentasi, $hasilbaca);
$hasilbaca = str_replace("data_jenis_kemasan", $data_jenis_kemasan, $hasilbaca);
$hasilbaca = str_replace("data_nama_perusahaan", $data_nama_perusahaan, $hasilbaca);
$hasilbaca = str_replace("data_halal", $data_halal, $hasilbaca);
$hasilbaca = str_replace("data_pirt", $data_pirt, $hasilbaca);
$hasilbaca = str_replace("data_legalitas", $data_legalitas, $hasilbaca);
$hasilbaca = str_replace("produksi", $data_kapasitas, $hasilbaca);
$hasilbaca = str_replace("data_media_promosi", $data_media_promosi, $hasilbaca);
$hasilbaca = str_replace("data_tanggal", $data_tanggal_cetak, $hasilbaca);



// Merekam kembali file hasil parser
$f = fopen($target, "w+"); 
fwrite($f, $hasilbaca); 
fclose($f);

// Otomatis membuka file hasil parser saat proses selesai 
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=0;URL=$target>";


}

?>