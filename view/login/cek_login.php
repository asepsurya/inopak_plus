
<?php 

// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../lib/koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data1 = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data1);
// cek apakah username dan password di temukan pada database
$myid = $cek['id_ikm'];
if($cek > 0){
 
	$data = mysqli_fetch_assoc($data1);
		
	// cek jika user login sebagai admin
	if($data['level']=="1"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		$_SESSION['nama'] = $data['nama']; // Set session untuk nama (simpan nama di session)
		$_SESSION['id_kota'] = $data['id_kota'];
		$_SESSION['gambar'] = $data['gambar'];
		$_SESSION['id_ikm'] = $data['id_ikm'];
		$_SESSION['login'] = "Signed in successfully";
		if( isset($_SESSION['username']) ) {
		   echo" SUdah Login "; 
	       header("location:login.php");
			
		}
		// alihkan ke halaman dashboard admin
		mysqli_query($koneksi,"UPDATE user SET online ='1' WHERE username = '$username'");
		//code ini berfungsi kalau proses login berhasil maka akan langsung di arahkan kehalaman home_index.php
		header("location:../admin/blank?id_kota=$data[id_kota]",true, 301);
		
 		
	// cek jika user login sebagai pegawai
	}else if($data['level']=="2"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pegawai";
		$_SESSION['nama'] = $data['nama']; // Set session untuk nama (simpan nama di session)
		$_SESSION['id_kota'] = $data['id_kota'];
		$_SESSION['gambar'] = $data['gambar'];
		$_SESSION['id_ikm'] = $data['id_ikm'];
		$_SESSION['login'] = "Signed in successfully";
		// alihkan ke halaman dashboard pegawai
		
		$my_ikm = $data['id_ikm'];
		
		mysqli_query($koneksi,"UPDATE user SET online ='1' WHERE username = '$username'");
		
		header("location:../../page_ikm/dashboard?id_kota=$data[id_kota]",true, 301);
		
	// cek jika user login sebagai pengurus
	}else if($data['level']=="3"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengurus";
		$_SESSION['nama'] = $data['nama']; 
		$_SESSION['id_kota'] = $data['id_kota'];// Set session untuk nama (simpan nama di session)
		// alihkan ke halaman dashboard pengurus
		header("location:halaman_pengurus");
		die();
	}else{
		
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	$_SESSION["gagal"] = 'Data Berhasil Disimpan';
	header("location:login.php?pesan=gagal");
}

?>