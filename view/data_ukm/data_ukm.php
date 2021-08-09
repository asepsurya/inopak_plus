<!DOCTYPE html>
<html lang="en">
<?php
// Turn off error reporting
error_reporting(0);
?>
  <head>
    <?php  $thispage = "ukm";?>
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
    <link href="../../lib/summernote/summernote-bs4.css" rel="stylesheet">
    <link href="../../lib/medium-editor/css/medium-editor.min.css" rel="stylesheet">
    <link href="../../lib/medium-editor/css/themes/default.min.css" rel="stylesheet">
    <link href="../../lib/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="../../lib/select2/css/select2.min.css" rel="stylesheet">
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
  <body class="collapsed-menu with-subleft">
  <!-- left panel -->
  <?php
  include '../../asset/left_panel.php';
  ?>
  <!-- End Left panel -->

  <!-- head panel start -->
  <?php
  include '../../asset/head_panel.php';
  ?>
  <!-- End Head Panel -->
  <?php 
  include '../lib/koneksi.php';
  ?> 
  <?php include '../modal/modal.php'; ?> 
 

    
  <?php
  include '../../asset/right_panel.php';
 
  ?>
  <!-- End right Panel -->
   
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
                  <!-- <label>ID Kota <span class="tx-danger">*</span></label>-->
                    <input type="text" name="id_kota" class="form-control " hidden placeholder="ID kota" value="<?php echo $kodemember ?>" readonly>
                   <!-- <div align="right"><small>* Diisi Secara Otomatis </small></div>-->
                  </div><!-- form-group -->
                  <div class="form-group">
                  <label>Nama Kota / Group<span class="tx-danger">*</span></label>
                    <input type="text" name="nama_kota" class="form-control ">
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

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-subleft">
      <div class="mg-t-20 pd-x-10 mg-b-40">
        <!-- memanggil modal -->
        <a href="" class="btn btn-info btn-block tx-uppercase tx-10 tx-mont tx-spacing-2 tx-medium" data-toggle="modal" data-target="#modaldemo2">+ New Group</a>
      </div>

      <div class="d-flex justify-content-between align-items-center mg-t-20 pd-x-10 bd-b bd-white-1 pd-b-5">
        <h6 class="tx-uppercase tx-10 mg-b-0 tx-roboto tx-white-7">Data Kota</h6>
        <a href="" class="tx-uppercase tx-10 tx-info tx-roboto">+ New</a>
      </div><br>
      <table class="table" action="" name="myTable1" id="myTable1">
      <select class="form-control  select2-show-search tx-13 " data-placeholder="Choose one (with searchbox)" id="select4" name="a" onchange="location = this.value;">
                <option label="Choose one" ReadOnly>Cari Kota</option>
                <?php
                 // TAMPILKAN DATA BARANG DAN HARGA
                 $barang=mysqli_query($koneksi, "SELECT * FROM tb_kota");
                 $jsArray = "var hrg_brg = new Array();\n"; 
                 
                 if(mysqli_num_rows($barang)) {?>
                   <?php while($row_brg= mysqli_fetch_array($barang)) {?>
                       <option value="data_ukm?id_kota=<?php echo $row_brg['id_kota'] ?>" ><a href="data_ukm?id_kota='.$data['id_kota'].'" class="nav-link "> <?php echo $row_brg["nama_kota"]?> </a></option>
                   <?php $jsArray .= "hrg_brg['" . $row_brg['nama_kota'] . "'] = {hrg:'" . addslashes($row_brg['id_kota']) . "'};\n"; } ?>
                   <?php } ?>
                
              </select>
             
      <?php
			include '../lib/koneksi.php';
     
      $query = "SELECT * FROM tb_kota ORDER BY id_kota DESC LIMIT 8 ";
      $result = mysqli_query($koneksi, $query);
      while($data = mysqli_fetch_assoc($result))
      {
        ?>
        
     <nav class="nav br-nav-mailbox flex-column">
        <?php echo '<a href="data_ukm?id_kota='.$data['id_kota'].'" class="nav-link "><i class="icon ion-ios-folder-outline"></i> '. $data['nama_kota'].' </a>'; ?>
      </nav>
    
      <?php } ?>
      </table>
      <div class="d-flex justify-content-between align-items-center mg-t-20 pd-x-10 bd-b bd-white-1 pd-b-5">
        <h6 class="tx-uppercase tx-10 mg-b-0 tx-roboto tx-white-7">Other</h6>
        <a href="" class="tx-uppercase tx-10 tx-info tx-roboto">+ New</a>
      </div>
      <nav class="nav br-nav-mailbox flex-column">
        <a href="data_ukm?id_kota=adm782924249" class="nav-link "><i class="icon ion-ios-folder-outline"></i> Other </a>
      </nav>
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
       <?php 
        $id_kota=$_GET['id_kota'];
        $query = "SELECT * FROM tb_kota where id_kota='$id_kota'";
        $result = mysqli_query($koneksi, $query);
        $data3 = mysqli_fetch_assoc($result)
       ?>
       
          <h4>Data IKM <?php if($_GET['id_kota'] !="0"){
            echo $data3['nama_kota']; }?></h4>
          <p class="mg-b-0">This is the contact manager where you can manage users/contacts.</p>
        </div>
      </div><!-- d-flex -->

      <div class="d-flex align-items-center justify-content-start pd-x-20 pd-sm-x-30 pd-t-25 mg-b-20 mg-sm-b-30">

        <button id="showSubLeft" class="btn btn-secondary mg-r-10 hidden-lg-up"><i class="fa fa-navicon"></i></button>

        <!-- START: DISPLAYED FOR MOBILE ONLY -->
        <div class="dropdown hidden-sm-up">
          <a href="#" class="btn btn-outline-secondary" data-toggle="dropdown"><i class="icon ion-more"></i></a>
          <div class="dropdown-menu pd-10">
            <nav class="nav nav-style-1 flex-column">
              <a href="" class="nav-link">Share</a>
              <a href="" class="nav-link">Download</a>
              <div class="dropdown-divider"></div>
              
              <a href="" class="nav-link">Delete</a>
            </nav>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <!-- END: DISPLAYED FOR MOBILE ONLY -->

        <div class="btn-group hidden-xs-down w-50">
          
          <input class="form-control fc-outline" type="text" name="lastname"  placeholder="Cari Berdasarkan Nama atau Jenis Produk.. " aria-label="Search"  id="myInput" onkeyup="myFunction()">
          <a href="#" class="btn btn-outline-info active"><i class="fa fa-search"></i></a>
        </div><!-- btn-group -->

        <div class="mg-l-auto hidden-xs-down">
          <a href="../front_page/formulir" class="btn btn-info">+ Tambah IKM Baru</a>
          <a href="../../cetak/cetak_ikm/exsport?id_kota=<?php echo $id_kota ?>&nama_kota=<?php echo $data3['nama_kota'] ?>" class="btn btn-outline-info mg-l-5"><i class="fas fa-file-excel"></i> Exsport to Excel</a>
          <a href="data_ukm.php?id_kota=0" class="btn btn-outline-info mg-l-5"><i class="fas fa-sort-amount-down"></i> Show All</a>
          
        </div>

      </div><!-- d-flex -->

      <div class="br-pagebody pd-x-20 pd-sm-x-30">
        <div class="card bd-0 shadow-base">
          <table class="table mg-b-0 table-contact" id="myTable">
            <thead>
              <tr>
                <th class="wd-5p">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </th>
                <th class="tx-10-force tx-mont tx-medium"><i class="fa fa-user"></i> Name / Jenis Produk</th>
                <th class="tx-10-force tx-mont tx-medium hidden-xs-down"><i class="fa fa-pin"></i> Alamat</th>
                <th class="tx-10-force tx-mont tx-medium hidden-xs-down"><i class="fa fa-phone"></i>  No Kontak</th>

                <th class="wd-5p hidden-xs-down"></th>
              </tr>
            </thead>
            <tbody>
            <?php
            $id = $_GET['id_kota'];
			      include '../lib/koneksi.php';
            $halaman = 10; /* page halaman*/
            $page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
            $mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;

            $result=mysqli_query($koneksi,"SELECT * FROM tb_ukm");
            $total = mysqli_num_rows($result);
            $pages = ceil($total/$halaman);

            if (isset($_GET['id_kota'])){
              if($_GET['id_kota'] == "0"){
              $query = "SELECT * FROM tb_brainstorming LIMIT $mulai, $halaman";
              $result = mysqli_query($koneksi, $query);
              }else{
              $query2 = "SELECT * FROM tb_brainstorming where id_kota='$id' LIMIT $mulai, $halaman";
              $result = mysqli_query($koneksi, $query2);
              }
            }
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
                    <!-- untuk Gambar -->
                    <?php
                    if ($data2['gender'] == "L"){
                      echo'<img src="../../img/user-default.jpg" class="wd-30 rounded-circle" alt="">';
                    }else{
                      echo'<img src="../../img/a.jpg" class="wd-30 rounded-circle" alt="">';
                    }
                    ?>
                    
                    <div class="mg-l-15">
                      <div class="tx-inverse"><?php echo $data2['nama'] ?></div>
                      <span class="tx-12"><?php echo $data2['jenis_produk'] ?></span>
                    </div>
                  </div>
                </td>
                <td class="valign-middle hidden-xs-down"><?php echo $data2['alamat'] ?></td>
                <td class="valign-middle hidden-xs-down"><?php echo $data2['telp'] ?></td>
                <td class="dropdown hidden-xs-down">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="detile_produk?id_pengajuan=<?php echo $data2['id_pengajuan'] ?>" class="nav-link" >Detail</a>
                      <a href="../../cetak/cetak2.php?nama_ikm=<?php echo $data2['nama'] ?>&id_pengajuan=<?php echo $data2['id_pengajuan'] ?>" class="nav-link" >Cetak</a>
                      <?php $id_ikm = $data2['id_ikm'];?>
                      <a onclick="confirm_modal('asset/delete_ukm?id_pengajuan=<?php echo $data2['id_pengajuan'] ?>&id_kota=<?php echo $id ?>')" href="#" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
                 
                 
              
              </tr>
              <?php }?>
                
              </tr>
            </tbody>
            <tr>
            <th></th>
          <?php
          if($id_kota =="0"){
          $sql = "SELECT * FROM tb_brainstorming";
          $query = $koneksi->query($sql);
          }else{
          $sql = "SELECT * FROM tb_brainstorming where id_kota='$id_kota'";
          $query = $koneksi->query($sql);
          }
          
          ?>
                
                 <th>Jumlah Data : <span class="badge bg-danger tx-white"><?php echo $query->num_rows ?> </span> </th>
                 <th></th>
                 
                <th >
                <div class=" d-flex align-items-center justify-content-center ">
            <ul class="pagination pagination-basic pagination-rounded mg-b-0">
              
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a>
              </li>
              <?php
            for ($i=1; $i<=$pages ; $i++){
                  if ($i != $page) {
                  echo'<li class="page-item "><a class="page-link" href="data_ukm?halaman='.$i.'&id_kota='.$id.'" style="text-decoration:none">'.$i.'</a></li>';
                   }else{
                 echo'<li class="page-item active "><a class="page-link" href="data_ukm?halaman='.$i.'&id_kota='.$id.'" style="text-decoration:none">'.$i.'</a></li>';
                  }
               }
               ?>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a>
              </li>
             
            </ul>
          </div> 
         </div> 
         </div>  
                </th>
                <th></th>
              </tr>
          </table>
        </div>
        <div style="font-weight:bold;">
    
        <footer class="br-footer">
        <div class="footer-left">
       
    </div>
      </div><!-- br-pagebody --> .
        
    </div><!-- br-contentpanel -->

    <!-- ########## END: MAIN PANEL ########## -->

    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../lib/moment/min/moment.min.js"></script>
    <script src="../../lib/peity/jquery.peity.min.js"></script>
    <script src="../../lib/highlightjs/highlight.pack.min.js"></script>
    <script src="../../lib/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="../../lib/parsleyjs/parsley.min.js"></script>
    <script src="../../lib/select2/js/select2.min.js"></script>               
    <script src="../../js/bracket.js"></script>
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
        $('#select4').select2({
          containerCssClass: 'select2-outline-success',
          dropdownCssClass: 'bd-success hover-success',
          minimumResultsForSearch: Infinity, // disabling search
          placeholder: 'Choose one'
        });

        $('#wizard3').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          stepsOrientation: 1
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
    
    <script type="text/javascript">
		
		var rupiah = document.getElementById('harga');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, '');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
		}
	</script>
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
  </body>
</html>
