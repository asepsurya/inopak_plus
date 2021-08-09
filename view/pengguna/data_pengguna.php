<!DOCTYPE html>
<html lang="en">
<?php 
$thispage = "pengguna" ;
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
  include '../../asset/right_panel.php';
  ?>
    <?php 
    include '../lib/koneksi.php';
    ?>  
    <!-- SMALL MODAL -->
    <div id="modaldemo2" class="modal fade effect-rotate-bottom">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Management Data</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
                <form method="POST" action="asset/tambah_pengguna.php" >
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
                  <label>Akun Untuk Kota<span class="tx-danger">*</span></label>
                  <select class="js-example-basic-single w-100 form-control" data-width="100%"  onchange="changeValue(this.value)" name="nm" required>
                  <option> - Pilih Kota - </option>
                  <option> <?php echo $data2['nama_kota']; ?> </option>
                  <?php 
                  // TAMPILKAN DATA BARANG DAN HARGA
                  $barang=mysqli_query($koneksi, "SELECT * FROM tb_kota");
                  $jsArray = "var hrg_brg = new Array();\n"; 

                  if(mysqli_num_rows($barang)) {?>
		                <?php while($row_brg= mysqli_fetch_array($barang)) {?>
		                    <option value="<?php echo $row_brg["nama_kota"]?>"> <?php echo $row_brg["nama_kota"]?> </option>
		                <?php $jsArray .= "hrg_brg['" . $row_brg['nama_kota'] . "'] = {hrg:'" . addslashes($row_brg['id_kota']) . "'};\n"; } ?>
		                <?php } ?>
									</select>
                
                  </div><!-- form-group -->
                  <input  hidden class="form-control" id="hrg" Required name="id_kota">
                  <div class="form-group">
                  <label>Nama Pengguna <span class="tx-danger">*</span></label>
                    <input type="text" name="nama_user" class="form-control " placeholder="Nama Pengguna">
                  </div><!-- form-group -->
                  <div class="form-group">
                  <label>Email <span class="tx-danger">*</span></label>
                    <input type="Email" name="username" class="form-control " placeholder="Admin@mail.com">
                  </div><!-- form-group -->
                  <div class="form-group">
                  <label>Password <span class="tx-danger">*</span></label>
                    <input type="Password" name="password" class="form-control " placeholder="Password">
                  </div><!-- form-group -->
                  <div class="form-group">
                  <label>Level Akun <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose Browser" name="level">
                  <option> - Pilih Level Akun - </option>
                  <option value="1">Administrator</option>
                  <option value="2">Akun IKM</option>
                  <option value="3">Bussiness Development</option>
                </select>
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
              $query = "SELECT * FROM user";
              $result = mysqli_query($koneksi, $query);
             while($row = mysqli_fetch_assoc($result))
            {
             ?>  
          <div id="modaledit<?php echo $row['id_user'] ?>" class="modal fade">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Reset Password</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
                <form method="POST" action="asset/edit_pengguna.php" >
                <!-- start Kode Otomatis -->
               
                  <div class="form-group">
                  <!--<label>ID Kota <span class="tx-danger">*</span></label> -->
                    <input type="text" hidden name="id_user" class="form-control" placeholder="ID kota" value="<?php echo $row['id_user'] ?>" readonly>
                    
                  </div>
                  <div class="form-group">
                  <label>Nama Pengguna<span class="tx-danger">*</span></label>
                    <input type="text" name="nama_pengguna" class="form-control "value="<?php echo $row['nama'] ?>">
                  </div><!-- form-group -->
                  <div class="form-group">
                  <label>Password Baru<span class="tx-danger">*</span></label>
                    <input type="password" name="pass1" class="form-control " placeholder="Password Baru">
                  </div><!-- form-group -->
                  <div class="form-group">
                  <label>Konfirmasi Password <span class="tx-danger">*</span></label>
                    <input type="password" name="pass2" class="form-control " placeholder="Konfirmasi Password">
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
      <a href="" class="btn btn-info tx-medium" data-toggle="modal" data-target="#modaldemo2">+ Tambah Pengguna</a><br>
      </div>
      <!-- memanggil alert -->
      <?php include'../modal/alert.php';?>

        <div class="card bd-0 shadow-base">
          <table class="table mg-b-0 table-contact">
            <thead>
              <tr>
                <th class="wd-5p">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </th>
                <th class="tx-10-force tx-mont tx-medium">Username / ID</th>
                <th class="tx-10-force tx-mont tx-medium">Level</th>
                <th class="tx-10-force tx-mont tx-medium">Nama User</th>
                <th class="tx-10-force tx-mont tx-medium">Hak Akses</th>
                <th class="wd-5p hidden-xs-down"></th>
              </tr>
            </thead>
            <tbody>
            <?php
              $query = "SELECT * FROM user";
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
                      <div class="tx-inverse"><?php echo $data2['username'] ?></div>
                      <span class="tx-12"><?php echo $data2['password'] ?></span>
                    </div>
                  </div>
                </td>
               
                <?php
                if($data2['level']=="1"){
                  echo"<td> Administrator </td>";
                }elseif($data2['level']=="2"){
                  echo"<td> Pengguna </td>";
                }elseif($data2['level']=="3"){
                  echo"<td> Pengguna Custom </td>";
                }
                ?>
                 <td><?php echo $data2['nama'] ?></td>
                <td>
                  <span class="badge badge-primary">Home</span>
                  <span class="badge badge-primary">user</span>
              </td>

                <td class="dropdown hidden-xs-down">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                    
                      <a href="" class="nav-link" data-toggle="modal" data-target="#modaledit<?php echo $data2['id_user'] ?>" >Reset Password</a>
                      <a onclick="confirm_modal('asset/hapus_pengguna.php?id_user=<?php echo $data2['id_user'] ?>')" href="#" class="nav-link">Delete</a>
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
    <?php include '../modal/modal.php ' ?>
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
