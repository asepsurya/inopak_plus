<!DOCTYPE html>
<html lang="en">
<?php 
$thispage = "pengajuan" ;
 
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
		<link href="../../lib/highlightjs/styles/github.css" rel="stylesheet">
    <link href="../../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../../lib/timepicker/jquery.timepicker.css" rel="stylesheet">
    <link href="../../lib/spectrum-colorpicker/spectrum.css" rel="stylesheet">
    <link href="../../lib/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="../../lib/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../../lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
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

    <!-- head panel -->
    <?php
    include '../../asset/head_panel.php';
    ?>
    <!-- End head Panrl -->
    <?php 
    include '../lib/koneksi.php';
    ?>  
     <?php
    include '../../asset/right_panel.php';
    ?>
    
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <span class="breadcrumb-item active">Blank Page</span>
        </nav>
      </div>
      
      <div class="br-pagetitle">
        <i class="icon icon ion-ios-briefcase-outline"></i>
        <div>
          <h4>Data Pengajuan</h4>
          <p class="mg-b-0">Halaman ini berfungsi sebagai pengaturan untuk pengajuan produk baru dari IKM yang sudah memiliki 1 atau 2 lebih dalam satu akun.. </p>
        </div>
      </div><!-- d-flex -->
      
      <div class="br-pagebody pd-x-10 pd-sm-x-30">
      <div class="mg-l-auto hidden-xs-down">
          <a href="riwayat_pengajuan.php" class="btn btn-outline-info mg-l-5"><i class="fas fa-history"></i> Riwayat</a>
        </div><br>
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
                <th class="tx-10-force tx-mont tx-medium"><i class="fab fa-accusoft"></i> Nama IKM</th>
                <th class="tx-10-force tx-mont tx-medium"><i class="fas fa-bookmark"></i> Jenis Produk</th>
                <th class="tx-10-force tx-mont tx-medium">Nama Perusahaan</th>
                <th class="tx-10-force tx-mont tx-medium">Status</th>
                <th class="wd-5p hidden-xs-down"></th>
              </tr>
            </thead>
            <tbody>
            <?php
            $id_ikm= $_SESSION['id_ikm'];
            $no=0;
              $query = "SELECT * FROM tb_pengajuan WHERE status='0'";
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
                <td><?php echo $data2['nama'] ?></span></td>
               <td>
               <?php echo $data2['jenis_produk'] ?>
            </td>
                 <td><?php echo $data2['keterangan'] ?></td>
                 <td><span class="badge bg-secondary tx-white">Belum Dikonfirmasi</span></td>

                <td class="dropdown hidden-xs-down">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                    
                      <a href="aksi/aksi_pengajuan?id_pengajuan=<?php echo $data2['id_pengajuan_new'] ?>&id_ikm=<?php echo $data2['id_ikm'] ?>" class="nav-link"  >Konfirmasi</a>
                      <a onclick="confirm_modal('asset/hapus_pengguna.php?id_user=<?php echo $data2['id_user'] ?>')" href="#" class="nav-link">Ditolak</a>
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
    <?php include '../../view/modal/modal.php ' ?>
    <script type="text/javascript">
    <?php echo $jsArray; ?>
    function changeValue(kd_brg) {
      document.getElementById("hrg").value = hrg_brg[kd_brg].hrg;
    };
    </script>             
    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../lib/moment/min/moment.min.js"></script>
    <script src="../../lib/peity/jquery.peity.min.js"></script>
    <script src="../../lib/highlightjs/highlight.pack.min.js"></script>
    <script src="../../lib/select2/js/select2.min.js"></script>
    <script src="../../lib/timepicker/jquery.timepicker.min.js"></script>
    <script src="../../lib/spectrum-colorpicker/spectrum.js"></script>
    <script src="../../lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script src="../../lib/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="../../lib/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
      
    <script src="../../js/bracket.js"></script>
    
  </body>
</html>
