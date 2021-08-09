<!DOCTYPE html>
<html lang="en">
<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:../login/login.php?pesan=belum_login");
	}
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
    <link href="../../lib/summernote/summernote-bs4.css" rel="stylesheet">
    <link href="../../lib/medium-editor/css/medium-editor.min.css" rel="stylesheet">
    <link href="../../lib/medium-editor/css/themes/default.min.css" rel="stylesheet">
    <link href="../../lib/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../../css/bracket.css">
  </head>
 
<body class="collapsed-menu with-subleft">
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
    
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <span class="breadcrumb-item active">Blank Page</span>
        </nav>
      </div><!-- br-pageheader -->
      
      <div class="br-pagebody">
      <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                    Making a Beautiful CSS3 Button Set
                  </a>
                </h6>
              </div><!-- card-header -->

              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-block pd-20">
                  A concisely coded CSS3 button set increases usability across the board, gives you a ton of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingTwo">
                <h6 class="mg-b-0">
                  <a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Horizontal Navigation Menu Fold Animation
                  </a>
                </h6>
              </div>
              <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="card-block pd-20">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingThree">
                <h6 class="mg-b-0">
                  <a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Creating CSS3 Button with Rounded Corners
                  </a>
                </h6>
              </div>
              <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="card-block pd-20">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
                </div>
              </div><!-- collapse -->
            </div><!-- card -->
          </div><!-- accordion -->
      <div class="alert alert-info alert-bordered pd-y-20" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <div class="d-flex align-items-center justify-content-start">
    <i class="icon ion-ios-information tx-52 tx-info mg-r-20"></i>
    <div>
      <h5 class="mg-b-2 tx-indo">Form Brainstorming</h5>
      <p class="mg-b-0 tx-gray">Mohon Isi data dibawah ini dengan Baik dan Benar</p>
    </div>
  </div><!-- d-flex -->
</div><!-- alert -->
<?php include '../modal/alert.php' ?> 
<form action="asset/input_data.php" method="POST">
      <div id="wizard">
        
          <h3>Informasi Diri</h3>
          
          <section>
          <p>Try the keyboard navigation by clicking arrow left or right!</p>
          
          <?php
                 $query = mysqli_query($koneksi, "SELECT max(id_ikm) as kodeTerbesar FROM tb_formulir");
                 $data = mysqli_fetch_array($query);
                 $kodemember = $data['kodeTerbesar'];              
                // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
                // dan diubah ke integer dengan (int)
                 $urutan = (int) substr($kodemember, 3, 3);                
                // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                 $urutan++;        

                 $huruf = "IKM";
                 $kodemember = $huruf . sprintf("%03s", $urutan);
                 ?>

          <div class="form-layout form-layout-1 bg-white">
          
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Nama Lengkap: <span class="tx-danger">*</span></label>
                  <input class="form-control" id="nama_ikm" type="text" name="nama_ikm"  placeholder="Nama lengkap" Required>
                  <input class="form-control" type="text" name="id_kota" hidden value="<?php echo $_SESSION['id_kota'] ?>" ReadOnly>
                  <input class="form-control" type="text" name="id_ikm"  hidden value="<?php echo $kodemember ?>" ReadOnly>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Kelas: <span class="tx-danger">*</span></label>
                  <input class="form-control" id="kelas" type="text" name="kelas"  placeholder="Kelas" Required>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
              <div class="form-group">
                  <label class="form-control-label">Telepon<span class="tx-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                   </div>
                <input type="text" class="form-control" id="telp" name="telp" placeholder="(999) 999-9999" Required>
               </div>
              </div>
              </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Alamat Lengkap <span class="tx-danger">*</span></label>
                  <textarea class="form-control" type="text" id="alamat" name="alamat"  placeholder="Alamat Lengkap" Required></textarea>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Jenis Kelamin <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country" name="gender" Required>
                    <option label="Pilih Gender"></option>
                    <option value="L">Laki - Laki</option>
                    <option value="P">Perempuan</option>
                    
                  </select>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
           
            
          </section>
      
          <h3>Detail Produk IKM</h3>
          <section>
          <p>Try the keyboard navigation by clicking arrow left or right!</p>
          <div class="form-layout form-layout-1 bg-white">
            <div class="row ">
            
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Jenis Produk <span class="tx-danger">*</span></label>
                  <input class="form-control " type="text" id="jenis_produk" name="jenis_produk"  placeholder="Jenis produk " Required>
                  <small>Contoh : Kue Kering, Sisik Keju</small>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="form-group">
                  <label class="form-control-label">Merek <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" id="merek" name="merek"  placeholder="Merk produk" Required>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Tagline</label>
                  <input class="form-control" type="text" id="tagline" name="tagline"  placeholder="Tagline Produk ">
                  <small>contoh : Kelembutan di setiap gigitan Anda</small>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="form-group">
                  <label class="form-control-label">Kelebihan Produk <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control"id="kelebihan_produk" name="kelebihan_produk" placeholder="Kelebihan Produk"Required>
                  <small>contoh : Renyah Gurih Nikmat</small>
                </div>
              </div>
               <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Segmentasi Pasar yang dituju</label>
                  <input class="form-control" type="text" id="segmen" name="segmen"  placeholder="Segmentasi Produk">
                  <small>* Diisi oleh Team </small>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Gramasi(g) <span class="tx-danger">*</span></label>
                  <div class="input-group">
                <input type="text" class="form-control" name="gramasi"id="gramasi" Required>
                <div class="input-group-append">
                  <span class="input-group-text">gram</span>
                </div>
              </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Harga Produk <span class="tx-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp.</span>
                   </div>
                <input type="text" class="form-control" name="harga" id="harga" Required>
              </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Kapasitas Produksi<span class="tx-danger">*</span></label>
                  <select class="form-control" type="text" name="kapasitas_produksi" id="kapasitas_produksi" Required>
                    <option>hari</option>
                    <option>Bulan</option>
                    <option>Tahun</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Omset<span class="tx-danger">*</span></label>
                  <select class="form-control" type="text" name="omset" id="omset" Required>
                    <option>Bulan</option>
                    <option>Tahun</option>
                    
                  </select>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Varian Produk <span class="tx-danger">*</span></label>
                  <textarea  rows="4" cols="100" name="varian" class="form-control" id="varian" placeholder="Masukan Varian Produk.... "Required></textarea>
                  <small>* Masukan Varian Produk</small>
                 </div>
            </div>
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Komposisi Produk <span class="tx-danger">*</span></label>
                  <textarea  rows="4" cols="100" name="komposisi" class="form-control" id="komposisi" placeholder="Masukan Komposisi Produk.... "Required></textarea>
                  <small>* Masukan Komposisi Produk</small>
                 </div>
            </div>
            
          </div>
        </div>
          
          </section>
          
          <h3>Kelengkapan Adm IKM</h3>
          <section>
            <p>Try the keyboard navigation by clicking arrow left or right!</p>
          <div class="form-layout form-layout-1 bg-white">
            <div class="row ">
            <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Nama Perusahaan<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="nama_perusahaan"  id="nama_perusahaan" placeholder="Nama Perusahaan"Required>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Nomor Halal<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="hallal"  id="hallal" placeholder="No Halal"Required>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Nomor PIRT<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="pirt"  id="pirt" laceholder="No PIRT"Required>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Nomor PIRT<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="pirt"  id="pirt" laceholder="No PIRT"Required>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Media Penjualan <span class="tx-danger">*</span></label>
                  <textarea class="form-control" type="text" name="media_penjualan" id="media_penjualan"  placeholder="Media Penjualan"></textarea>
                  <small>*Contoh : Facebook, Instagram dll</small>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Legalitas Lainnya<span class="tx-danger">*</span></label>
                  <textarea class="form-control" type="text" name="legalitas" id="legalitas" placeholder="Legalitas Lainnya"></textarea>
                  <small>* Contoh :  Surat Izin Usaha Perdagangan (SIUP), NPWP Badan Usaha dll</small>
                </div>
              </div>
            
             
              
              <div class="col-lg-5">
                <br>
            <input type="submit"value="Simpan Data" class="btn btn-info" name="input">
            </div>
            </div><!-- row-->
            </div><!--form-layout -->
            
          </section>
          
        </form>
        </div>
        <br>
        <!-- start you own content here -->
    
      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src=".../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../lib/moment/min/moment.min.js"></script>
    <script src="../../lib/peity/jquery.peity.min.js"></script>
    <script src="../../lib/highlightjs/highlight.pack.min.js"></script>
    <script src="../../lib/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="../../lib/parsleyjs/parsley.min.js"></script>

    <script src="../../js/bracket.js"></script>
   
   
     <script>
      
      $(document).ready(function(){
        'use strict';
       
        $('#wizard').steps({
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
                var varian = $('#varian').parsley();

                if(jenis_produk.isValid() && merek.isValid() && tagline.isValid() && gramasi.isValid() && harga.isValid() && kapasitas_produksi.isValid() && omset.isValid() && komposisi.isValid() && varian.isValid()) {
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
                  varian.validate();
                }
              }
            
            // Always allow step back to the previous step even if the current step is not valid.
            } else { return true; }
          }
          
        });

      });
    </script>
  
  </body>
</html>
