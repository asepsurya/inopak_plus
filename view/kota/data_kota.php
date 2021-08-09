<!DOCTYPE html>
<html lang="en">
<?php 
$thispage = "kota" ;
$sub = "setting" ; 
?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
    
    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="../../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../lib/sweet_alert/sweetalert2.min.css">
    <script src="../../lib/sweet_alert/sweetalert.min.js"></script>
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../../css/bracket.css">
  </head>
  <?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:../login/login.php?pesan=belum_login");
	}
	?>
  <body>
    <!-- left panel -->
    <?php
    include '../../asset/left_panel.php';
    ?>
    <!-- End Left Panrl -->
    <?php
  include '../../asset/right_panel.php';
 
  ?>
    <!-- head panel -->
    <?php
    include '../../asset/head_panel.php';
    ?>
    <!-- End head Panrl -->
    <?php 
    include '../lib/koneksi.php';
    ?>  
    <?php include '../modal/modal.php' ?> 
    <!-- SMALL MODAL -->
    <div id="modaldemo2" class="modal fade">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Management Data</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
                <form method="POST" action="asset/tambah_kota.php" >
                <!-- start Kode Otomatis -->
                <?php
                 $query = mysqli_query($koneksi, "SELECT max(id_kota) as kodeTerbesar FROM tb_kota");
                 $data = mysqli_fetch_array($query);
                 $kodemember = $data['kodeTerbesar'];              
                // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
                // dan diubah ke integer dengan (int)
                 $urutan = (int) substr($kodemember, 3, 3);                
                // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                 $urutan++;        

                 $huruf = "KT";
                 $kodemember = $huruf . sprintf("%03s", $urutan);
                 ?>
                  <div class="form-group">
                  <label>ID Kota <span class="tx-danger">*</span></label>
                    <input type="text" name="id_kota" class="form-control " placeholder="ID kota" value="<?php echo $kodemember ?>" readonly>
                    <div align="right"><small>* Diisi Secara Otomatis </small></div>
                  </div><!-- form-group -->
                  <div class="form-group">
                  <label>Nama Kota <span class="tx-danger">*</span></label>
                    <input type="text" name="nama_kota" class="form-control " placeholder="Nama Kota">
                  </div><!-- form-group -->
                </div>
                <div class="modal-footer justify-content-center">
                  <input type="submit" name="input" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" value="Simpan">
                  </form>
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->

           <!-- SMALL MODAL -->
           <?php
              $query = "SELECT * FROM tb_kota";
              $result = mysqli_query($koneksi, $query);
            while($row = mysqli_fetch_assoc($result))
            {
             ?>  
          <div id="modaledit<?php echo $row['id_kota'] ?>" class="modal fade">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Management Data</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
                <form method="POST" action="asset/edit_kota.php" >
                <!-- start Kode Otomatis -->
               
                  <div class="form-group">
                  <label>ID Kota <span class="tx-danger">*</span></label>
                    <input type="text" name="id_kota" class="form-control " placeholder="ID kota" value="<?php echo $row['id_kota'] ?>" readonly>
                    <div align="right"><small>* Diisi Secara Otomatis </small></div>
                  </div><!-- form-group -->
                  <div class="form-group">
                  <label>Nama Kota <span class="tx-danger">*</span></label>
                    <input type="text" name="nama_kota" class="form-control " placeholder="Nama Kota" value="<?php echo $row['nama_kota'] ?>">
                  </div><!-- form-group -->
                </div>
                <div class="modal-footer justify-content-center">
                  <input type="submit" name="input" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" value="Simpan">
                  </form>
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
    <?php }?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <span class="breadcrumb-item active">Blank Page</span>
        </nav>
      </div>
     
      
      <div class="br-pagebody pd-x-20 pd-sm-x-30">
        <!-- tombol popup -->
      <div class="mg-t-20 pd-x-10 mg-b-20">
      <a href="" class="btn btn-info tx-medium" data-toggle="modal" data-target="#modaldemo2">+ Tambah Kota</a><br>
      </div>
      <?php include '../modal/alert.php' ?> 
      <div class="card bd-0 shadow-base ">
        <!-- ajax tampil data -->
     
          <table class="table mg-b-0 table-contact">
            <thead>
              <tr>
                <th class="wd-5p">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </th>
                <th class="tx-10-force tx-mont tx-medium">Name / Jenis Produk</th>
                <th class="wd-5p hidden-xs-down"></th>
              </tr>
            </thead>
            <tbody>
            <?php
              $query = "SELECT * FROM tb_kota";
              $result = mysqli_query($koneksi, $query);
            while($data2 = mysqli_fetch_assoc($result))
            {
             ?>  
              
            <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="mg-l-15">
                      <div class="tx-inverse"><?php echo $data2['nama_kota'] ?></div>
                      <span class="tx-12"><?php echo $data2['id_kota'] ?></span>
                    </div>
                  </div>
                </td>
               
                <td class="dropdown hidden-xs-down">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                    
                      <a href="" class="nav-link"data-toggle="modal" data-target="#modaledit<?php echo $data2['id_kota'] ?>" >Edit</a>
                      <a onclick="confirm_modal('asset/hapus_kota.php?id_kota=<?php echo $data2['id_kota'] ?>')" href="#" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <?php }?>
                
              </tr>
            </tbody>
          </table>
        
      </div>
      </div><!-- br-pagebody -->
<br>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <?php if(isset($_SESSION['update'])){ ?>
        <script>
            swal({
            title: "Good job!",
            text: "<?php echo $_SESSION['update'];?>",
            icon: "success",
            button: "OK",
           });
        </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['update']); } ?>
    <?php if(isset($_SESSION['gagal'])){ ?>
        <script>
            swal({
            title: "Mohon Perhatian",
            text: "<?php echo $_SESSION['gagal'];?>",
            icon: "error",
            button: "OK",
           });
        </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['gagal']); } ?>
    <?php if(isset($_SESSION['tambah'])){ ?>
        <script>
            swal({
            title: "Mohon Perhatian",
            text: "<?php echo $_SESSION['tambah'];?>",
            icon: "success",
            button: "OK",
           });
        </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['tambah']); } ?>
        
    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../lib/moment/min/moment.min.js"></script>
    <script src="../../lib/peity/jquery.peity.min.js"></script>
    <script src="../../js/bracket.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>

<body>

</body>
  </body>
</html>
