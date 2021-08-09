<!DOCTYPE html>
<html lang="en">
<?php 
$thispage = "pengajuan" ;
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
    <link href="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
		<link href="../lib/highlightjs/styles/github.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../lib/timepicker/jquery.timepicker.css" rel="stylesheet">
    <link href="../lib/spectrum-colorpicker/spectrum.css" rel="stylesheet">
    <link href="../lib/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="../lib/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link rel="stylesheet" href="../lib/sweet_alert/sweetalert2.min.css">
    <script src="../lib/sweet_alert/sweetalert.min.js"></script>
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
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
    include 'asset/left_panel.php';
    ?>
    <!-- End Left Panrl -->

    <!-- head panel -->
    <?php
    include 'asset/head_panel.php';
    ?>
    <!-- End head Panrl -->
    <?php 
    include '../view/lib/koneksi.php';
    ?>  
    <!-- SMALL MODAL -->
    <div id="modaldemo2" class="modal fade effect-rotate-bottom">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Pengajuan Produk Baru</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
                <form method="POST" action="aksi/input_data_pengajuan.php" >
                <!-- start Kode Otomatis -->
            
                  <?php
                  $query = "SELECT * FROM tb_kota ";
                  $result = mysqli_query($koneksi, $query);
                  //mengecek apakah ada error ketika menjalankan query
                  if(!$result){
                  die ("Query Error: ".mysqli_errno($koneksi).
                    " - ".mysqli_error($koneksi));
                    }
                $data2 = mysqli_fetch_assoc($result)
                ?> 
                 
                  
              
                  <div class="form-group">
                  <label>Tanggal pengajuan <span class="tx-danger">*</span></label>
                    <input type="text" name="tanggal" class="form-control " value="<?php echo date('d-m-Y'); ?>" ReadOnly>
                    <input  hidden class="form-control"  Required name="id_kota" value="<?php echo $data2['id_kota'] ?>">
                  </div><!-- form-group -->
                  <div class="form-group">
                  <label>Nama Pengguna<span class="tx-danger">*</span></label>
                    <input type="text" name="nama" class="form-control " value="<?php echo $_SESSION['nama']; ?>"ReadOnly> 
                  </div><!-- form-group -->
                  <div class="form-group">
                  <label>Jenis Produk yang diajukan<span class="tx-danger">*</span></label>
                    <input type="text" name="jenis_produk" class="form-control " required>
                  </div><!-- form-group -->
                  <div class="form-group">
                  <label>No Telp<span class="tx-danger">*</span></label>
                    <input type="text" name="telp" class="form-control " required>
                    <small> No Telepon yang masih Aktif</small>
                  </div><!-- form-group -->
                  <div class="form-group">
                  <label>Keterangan<span class="tx-danger" cols="4" rows="200">*</span></label>
                  <textarea class="form-control" name="keterangan"></textarea>
                  </div><!-- form-group -->
                  <small><strong> Notes :</strong> <br>Ketika Pengajuan diampprove maka akan keluar Menu <b> Form Brainstorming </b> di bawah menu Dashboard. </small>
                </div>
                
                <div class="modal-footer justify-content-center">
                  <input type="submit" name="input" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium btn-block" value="Ajukan Produk">
                  </form>
                  
                </div>
                
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
       
           
    
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
      <a href="" class="btn btn-info tx-medium" data-toggle="modal" data-target="#modaldemo2">+ Pengajuan Produk Baru</a>
      <a href="data_ukm.php?id_kota=<?php echo $id_kota ?>" class="btn btn-outline-info mg-l-5"><i class="fas fa-history"></i> Riwayat</a>
      </div>
      <!-- memanggil alert -->
      <?php include'../view/modal/alert.php';?>

        <div class="card bd-0 shadow-base">
          <table class="table mg-b-0 table-contact">
            <thead>
              <tr>
                <th class="wd-5p">
                  <label class="ckbox mg-b-0">
                    #
                  </label>
                </th>
                <th class="tx-10-force tx-mont tx-medium"><i class="fa fa-calendar"></i> Tanggal Pengajuan</th>
                <th class="tx-10-force tx-mont tx-medium"><i class="fab fa-accusoft"></i> Jenis Produk</th>
                <th class="tx-10-force tx-mont tx-medium"><i class="fas fa-bookmark"></i> Merek</th>
                <th class="tx-10-force tx-mont tx-medium">Nama Perusahaan</th>
                <th class="tx-10-force tx-mont tx-medium">Status</th>
                <th class="wd-5p hidden-xs-down"></th>
              </tr>
            </thead>
            <tbody>
            <?php
            $id_ikm= $_SESSION['id_ikm'];
            $no=0;
              $query = "SELECT * FROM tb_formulir where id_ikm='$id_ikm' ORDER by id_pengajuan DESC ";
              $result = mysqli_query($koneksi, $query);
            while($data2 = mysqli_fetch_assoc($result))
            
            {
              $no++;
             ?>  
              
            <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                  <?php echo $no ?>
                  </label>
                </td>
               
                <td>
                      <div class="tx-inverse"><?php echo $data2['tanggal'] ?></div>
                      
                </td>
                <td><?php echo $data2['jenis_produk'] ?></span></td>
               <td>
               <?php echo $data2['merek'] ?>
            </td>
                 <td><?php echo $data2['nama_perusahaan'] ?></td>
                 <td><span class="badge bg-secondary tx-white">On Proccess</span></td>

                <td class="dropdown hidden-xs-down">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                    
                      <a href="detile_produk?id_pengajuan=<?php echo $data2['id_pengajuan']; ?>" class="nav-link"  >Detail Produk Saya</a>
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

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <?php include '../view/modal/modal.php ' ?>
    <script type="text/javascript">
    <?php echo $jsArray; ?>
    function changeValue(kd_brg) {
      document.getElementById("hrg").value = hrg_brg[kd_brg].hrg;
    };
    </script> 

    <?php if(isset($_SESSION['ubah'])){ ?>
        <script>
            swal({
            title: "Good job!",
            text: "<?php echo $_SESSION['ubah'];?>",
            icon: "success",
            button: "OK",
           });
        </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['ubah']); } ?>
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
        <?php unset($_SESSION['tambah']); } ?>          
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../lib/moment/min/moment.min.js"></script>
    <script src="../lib/peity/jquery.peity.min.js"></script>
    <script src="../lib/highlightjs/highlight.pack.min.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>
    <script src="../lib/timepicker/jquery.timepicker.min.js"></script>
    <script src="../lib/spectrum-colorpicker/spectrum.js"></script>
    <script src="../lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script src="../lib/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="../lib/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
      
    <script src="../js/bracket.js"></script>
    
  </body>
</html>
