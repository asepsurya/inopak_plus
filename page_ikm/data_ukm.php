<!DOCTYPE html>
<html lang="en">
<?php $thispage = "ukm" ; ?>
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
    <link href="../lib/summernote/summernote-bs4.css" rel="stylesheet">
    <link href="../lib/medium-editor/css/medium-editor.min.css" rel="stylesheet">
    <link href="../lib/medium-editor/css/themes/default.min.css" rel="stylesheet">
    <link href="../lib/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
  </head>
  <?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:../login/login.php?pesan=belum_login");
	}
	?>
  <body class="collapsed-menu with-subleft">
  <!-- left panel -->
  <?php
  include 'asset/left_panel.php';
  ?>
  <!-- End Left panel -->

  <!-- head panel start -->
  <?php
  include 'asset/head_panel.php';
  ?>
  <!-- End Head Panel -->
  <?php 
  include '../view/lib/koneksi.php';
  ?> 
  <?php include '../view/modal/modal.php'; ?> 
  <!-- SMALL MODAL -->
  

    
  <?php
  include '../asset/right_panel.php';
 
  ?>
  <!-- End right Panel -->
    
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
                    <small>* Diisi Secara Otomatis </small>
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

        <?php 
        $id_kota=$_GET['id_kota'];
        $query = "SELECT * FROM tb_kota where id_kota='$id_kota'";
        $result = mysqli_query($koneksi, $query);
        $data3 = mysqli_fetch_assoc($result)
       ?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-subleft">
      <div class="mg-t-20 pd-x-10 mg-b-40">
    
            <div class="card shadow-base bd-0">
              <div class="card-header bg-transparent align-items-center">
                <h6 class="card-title tx-uppercase tx-12 mg-b-0">Jumlah IKM Saat ini </h6>
                <span class="tx-12 tx-uppercase"><?php echo $data3['nama_kota']?></span>
              </div><!-- card-header -->
              <div class="card-body d-xs-flex justify-content-between align-items-center">
                <h4 class="mg-b-0 tx-inverse tx-lato tx-bold">5,322,425</h4>
               
              </div><!-- card-body -->
            </div><!-- card -->
          

      </div>

      <div class="d-flex justify-content-between align-items-center mg-t-20 pd-x-10 bd-b bd-white-1 pd-b-5">
        <h6 class="tx-uppercase tx-10 mg-b-0 tx-roboto tx-white-7">Data Kota</h6>
        <a href="" class="tx-uppercase tx-10 tx-info tx-roboto">+ New</a>
      </div>
      <?php
			$idkt=$_SESSION['id_kota'];
      $query = "SELECT * FROM tb_kota where id_kota='$idkt' ";
      $result = mysqli_query($koneksi, $query);
      while($data = mysqli_fetch_assoc($result))
      {
        ?>
      <nav class="nav br-nav-mailbox flex-column">
        <?php echo '<a href="data_ukm?id_kota='.$data['id_kota'].'" class="nav-link"><i class="icon ion-ios-folder-outline"></i> '. $data['nama_kota'].' </a>'; ?>
      </nav>
      <?php } ?>
      
      
    </div><!-- br-subleft -->

    <div class="br-contentpanel">
      <div class="br-pageheader pd-y-15 pd-md-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <a class="breadcrumb-item" href="pages.html">Pages</a>
          <span class="breadcrumb-item active">Contacts Manager</span>
        </nav>
      </div><!-- br-pageheader -->

      <div class="br-pagetitle">
        <i class="icon ion-ios-filing-outline"></i>
        <div>
      
       
          <h4>Data IKM <?php echo $data3['nama_kota']; ?></h4>
          <p class="mg-b-0">This is the contact manager where you can manage users/contacts.</p>
        </div>
      </div><!-- d-flex -->

      <div class="d-flex align-items-center justify-content-start pd-x-20 pd-sm-x-30 pd-t-25 mg-b-20 mg-sm-b-30">
          
       
        <div class="btn-group w-50">
          
          <input class="form-control fc-outline" type="text" name="lastname"  placeholder="Cari Berdasarkan Nama atau Jenis Produk.. " aria-label="Search"  id="myInput" onkeyup="myFunction()">
          <a href="#" class="btn btn-outline-info active"><i class="fa fa-search"></i></a>
        </div><!-- btn-group -->

        <div class="mg-l-auto hidden-xs-down">
          <a href="data_ukm.php?id_kota=<?php echo $id_kota ?>" class="btn btn-outline-info mg-l-5"><i class ="fa fa-users"></i> Show All</a>
        </div>

      </div><!-- d-flex -->

      <div class="br-pagebody pd-x-20 pd-sm-x-30">
        <div class="card bd-0 shadow-base">
          
<table class="table mg-b-0 table-contact" id="myTable">
            <thead>
              <tr>
                <th class="wd-5p">
                  <label class="ckbox mg-b-0">
                    #
                  </label>
                </th>
                <th class="tx-10-force tx-mont tx-medium">Name / Jenis Produk</th>
                <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Alamat</th>
                <th class="tx-10-force tx-mont tx-medium ">No Kontak</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $id = $_GET['id_kota'];
			      
            if (isset($_GET['id_kota'])){
              if($_GET['id_kota'] == "0"){
                
              $query = "SELECT * FROM tb_brainstorming ";
              $result = mysqli_query($koneksi, $query);
              }else{
              $query2 = "SELECT * FROM tb_brainstorming where id_kota='$id'";
              $result = mysqli_query($koneksi, $query2);
              }
            }
            $no=0;
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
                  <div class="d-flex align-items-center">
                    <!-- untuk Gambar -->
                    <?php
                    if ($data2['gender'] == "L"){
                      echo'<img src="../img/user-default.jpg" class="wd-30 rounded-circle" alt="">';
                    }else{
                      echo'<img src="../img/a.jpg" class="wd-30 rounded-circle" alt="">';
                    }
                    ?>
                    
                    <div class="mg-l-15">
                      <div class="tx-inverse"><?php echo $data2['nama'] ?></div>
                      <span class="tx-12"><?php echo $data2['jenis_produk'] ?></span>
                    </div>
                  </div>
                </td>
                <td class="valign-middle hidden-xs-down"><?php echo $data2['alamat'] ?></td>
                <td class="valign-middle "><?php echo $data2['telp'] ?></td>
                 
              
              </tr>
              <?php }?>
                
              </tr>
            </tbody>
          </table>

        </div>
      </div><!-- br-pagebody -->
      
    </div><!-- br-contentpanel -->



    <!-- ########## END: MAIN PANEL ########## -->
    <!-- <script type="text/javascript">
      var otomatis = setInterval(
        function ()
      {
      $('.tampil-data').load('tampil/tampil_ikm.php').fadeIn("slow");
      }, 500);
      </script>-->
    
    <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
  
        $('#wizard4').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          cssClass: 'wizard step-equal-width',
          onStepChanging: function (event, currentIndex, newIndex) {
            if(currentIndex < newIndex) {
              // Step 1 form validation
              if(currentIndex === 0) {
                var nama_ikm = $('#nama_ikm').parsley();
                var kelas = $('#kelas').parsley();
                var telp = $('#telp').parsley();
                var alamat = $('#alamat').parsley();

                if(nama_ikm.isValid() && kelas.isValid() && telp.isValid() && alamat.isValid()) {
                  return true;
                } else {
                  nama_ikm.validate();
                  kelas.validate();
                  telp.validate();
                  alamat.validate();
                }
              }

              // Step 1 form validation
              if(currentIndex === 1) {
                var jenis_produk = $('#jenis_produk').parsley();
                var merek = $('#merek').parsley();
                var tagline = $('#tagline').parsley();
                var kelebihan_produk = $('#kelebihan_produk').parsley();
                
                var gramasi = $('#gramasi').parsley();
                var harga = $('#harga').parsley();
                var kapasitas_produksi = $('#kapasitas_produksi').parsley();
                var omset = $('#omset').parsley();
                var komposisi = $('#komposisi').parsley();

                if(jenis_produk.isValid() && merek.isValid() && tagline.isValid() && gramasi.isValid() && harga.isValid() && kapasitas_produksi.isValid() && omset.isValid() && komposisi.isValid()) {
                  return true;
                } else {
                  jenis_produk.validate();
                  merek.validate();
                  tagline.validate();
                  kelebihan_produk.validate();
                  
                  gramasi.validate();
                  harga.validate();
                  kapasitas_produksi.validate();
                  omset.validate();
                  komposisi.validate();
                }
              }
            
            // Always allow step back to the previous step even if the current step is not valid.
            } else { return true; }
          }
          
        });

      });
    </script>
    <script>

        // Showing sub left menu
        $('#showSubLeft').on('click', function(){
          if($('body').hasClass('show-subleft')) {
            $('body').removeClass('show-subleft');
          } else {
            $('body').addClass('show-subleft');
          }
        });

      });
      
    </script>
   <script src='../lib/ttd/jquery-3.0.0.js' type='text/javascript'></script>
    <script src="../lib/ttd/signature_pad-master/js/signature_pad.js"></script>
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../lib/moment/min/moment.min.js"></script>
    <script src="../lib/peity/jquery.peity.min.js"></script>
    <script src="../lib/highlightjs/highlight.pack.min.js"></script>
    <script src="../lib/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="../lib/parsleyjs/parsley.min.js"></script>
    <script src="../lib/summernote/summernote-bs4.min.js"></script>
    <script src="../lib/peity/jquery.peity.min.js"></script>
    <script src="../lib/highlightjs/highlight.pack.min.js"></script>
    <script src="../lib/medium-editor/js/medium-editor.min.js"></script>
    <script src="../lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script src="../lib/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="../js/bracket.js"></script>
  </body>
</html>
