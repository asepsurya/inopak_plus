<link rel="stylesheet" href="../../lib/sweet_alert/sweetalert2.min.css">
<?php
$tgl=date("d-m-Y");
        if(isset($_GET['pesan'])){
          if($_GET['pesan']=="update"){
            echo "
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <h4 class='alert-heading'>Well done!</h4><hr>
            <strong>Horee!</strong> Data Kamu Berhasil Diubah 
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
          }elseif($_GET['pesan']=="gagal_ubah"){
            echo "
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <h4 class='alert-heading'>Informasi!</h4><hr>
            <strong>Yah!</strong> Data Gagal di Ubah Mohon Cek Kembali Data Anda..
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
          } elseif($_GET['pesan']=="tambah"){
            echo "
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <h4 class='alert-heading'>Well done!</h4><hr>
            <strong>Horee!</strong> Data Berhasil ditambahkan pada Tanggal $tgl
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
          }elseif($_GET['pesan']=="gagal_tambah"){
            echo "
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <h4 class='alert-heading'>Informasi</h4><hr>
            <strong>Yah!</strong> Data Gagal di Simpan
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
          }elseif($_GET['pesan']=="hapus"){
            echo "
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <h4 class='alert-heading'>Well done!</h4><hr>
            <strong>Horee!</strong> Data Berhasil Di Hapus
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
          }elseif($_GET['pesan']=="gagal_hapus"){
            echo "
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <h4 class='alert-heading'>Informasi</h4><hr>
            <strong>Yah!</strong> Data Gagal DiHapus
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
          }elseif($_GET['pesan']=="tidaksama"){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <h4 class='alert-heading'>Informasi</h4><hr>
            <strong>Yah!</strong> Password yang Anda Masukan tidak Sama, Mohon Periksa Kembali Data Anda
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
          }elseif($_GET['pesan']=="sudah_ada"){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <h4 class='alert-heading'>Informasi</h4><hr>
            <strong>Yah!</strong> Email  Sudah Terdaftar ..! Silahkan Periksa Kembali data Anda...
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
          }elseif($_GET['pesan']=="gagal"){
            echo "
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Informasi ..!!</strong><br> Username dan password tidak valid! Mohon Perikasa Kembali Data Anda..!!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
          }
        }
        ?>
        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>