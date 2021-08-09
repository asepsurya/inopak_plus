<?php
session_start();
include '../../view/lib/koneksi.php';
$id_ikm=$_SESSION['id_ikm'];
$limit = 300 * 1024 * 1024;
$ekstensi =  array('png','jpg','jpeg','gif');
$jumlahFile = count($_FILES['foto']['name']);

for($x=0; $x<$jumlahFile; $x++){
	$namafile = $_FILES['foto']['name'][$x];
	$tmp = $_FILES['foto']['tmp_name'][$x];
	$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
	$ukuran = $_FILES['foto']['size'][$x];	
	if($ukuran > $limit){
		header("location:../media2.php?alert=gagal_ukuran");		
	}else{
		if(!in_array($tipe_file, $ekstensi)){
			header("location:../media2?alert=gagal_ektensi");			
		}else{		
			move_uploaded_file($tmp, '../upload/'.date('d-m-Y').'-'.$namafile);
			$x = date('d-m-Y').'-'.$namafile;
			mysqli_query($koneksi,"INSERT INTO tb_media VALUES('5','$id_ikm','$x','')");
			header("location:../media2?alert=simpan");
		}
	}
}

