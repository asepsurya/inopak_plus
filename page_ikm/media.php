
<!DOCTYPE html>
<html lang="en">
<?php  $thispage = "form";?>

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

    <title>Form Brainstorming</title>

    <!-- vendor css -->
    <link href="../lib/summernote/summernote-bs4.css" rel="stylesheet">
    <link href="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <style>
      /*! Image Uploader - v1.0.0 - 15/07/2019
 * Copyright (c) 2019 Christian Bayer; Licensed MIT */
.image-uploader{min-height:10rem;border:1px solid #d9d9d9;position:relative}.image-uploader.drag-over{background-color:#f3f3f3}.image-uploader input[type="file"]{width:0;height:0;position:absolute;z-index:-1;opacity:0}.image-uploader .upload-text{position:absolute;top:0;right:0;left:0;bottom:0;display:flex;justify-content:center;align-items:center;flex-direction:column}.image-uploader .upload-text i{display:block;font-size:3rem;margin-bottom:.5rem}.image-uploader .upload-text span{display:block}.image-uploader.has-files .upload-text{display:none}.image-uploader .uploaded{padding:10px;line-height:0}.image-uploader .uploaded .uploaded-image{display:inline-block;width:calc(16.6666667% - 1rem);padding-bottom:calc(16.6666667% - 1rem);height:0;position:relative;margin:.5rem;background:#f3f3f3;cursor:default}.image-uploader .uploaded .uploaded-image img{width:100%;height:100%;object-fit:cover;position:absolute}.image-uploader .uploaded .uploaded-image .delete-image{display:none;cursor:pointer;position:absolute;top:.2rem;right:.2rem;border-radius:50%;padding:.3rem;background-color:rgba(0,0,0,.5);-webkit-appearance:none;border:none}.image-uploader .uploaded .uploaded-image:hover .delete-image{display:block}.image-uploader .uploaded .uploaded-image .delete-image i{color:#fff;font-size:1.4rem}
</style>

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
  </head>
 
  <body class="collapsed-menu with-subleft"> 
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
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <span class="breadcrumb-item active">Blank Page</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <i class="icon icon ion-ios-book-outline"></i>
        <div>
          <h4>Import Media<small><i>Brainstorming Form</i></small></h4>
          <p class="mg-b-0">Mohon Isi Form dibawah ini dengan Benar.</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
      <?php include '../view/modal/alert.php' ?> 
        <form action="aksi/input_data.php" method="POST" enctype="multipart/form-data">
        <!-- start you own content here -->
        <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                    Informasi Diri <small><i>self information</i></small>
                  </a>
                </h6>
              </div><!-- card-header -->
              <div class="ht-200 bg-gray-200 mg-t-60 d-flex align-items-center justify-content-center">
            <input type="file" name="file-2[]" id="file-2" class="inputfile" data-multiple-caption="{count} files selected" multiple="">
            <label for="file-2" class="if-outline if-outline-info">
              <i class="icon ion-ios-upload-outline tx-24"></i>
              <span>Choose a file...</span>
            </label>
          </div>

        
                <div class="input-images-1" style="padding-top: .5rem;"></div>
       

           
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingTwo">
                <h6 class="mg-b-0">
                  <a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Informasi Produk <small><i>Product information</i></small>
                  </a>
                </h6>
              </div>
              <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="card-block pd-20">
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
                  <label class="form-control-label">Kapasitas Produksi (Per)<span class="tx-danger">*</span></label>
                  <select class="form-control" type="text" name="kapasitas_produksi" id="kapasitas_produksi" Required>
                    <option>hari</option>
                    <option>Bulan</option>
                    <option>Tahun</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Omset(Per)<span class="tx-danger">*</span></label>
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
          <label class="form-control-label">Redaksi<span class="tx-danger">*</span></label>
          <textarea name="redaksi" rows="4" cols="100" class="form-control" ></textarea><br>
          <label class="form-control-label">Keterangan Lainnya<span class="tx-danger">*</span></label>
          <textarea name="keterangan" id="redaksi" class="form-control" rows="4" cols="100"></textarea>
          <small>* Contoh :  Saran Penyajian, Cara Masak, Dll.</small>
          
        </div>
                 
                 </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingThree">
                <h6 class="mg-b-0">
                  <a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Kelengkapan Adm IKM <small><i>Completeness of Adm IKM</i></small>
                  </a>
                </h6>
              </div>
              <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="card-block pd-20">
                <div class="form-layout form-layout-1 bg-white">
            <div class="row ">
            <div class="col-lg-10">
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
            <input type="submit"value="+ Simpan Data" class="btn btn-info" name="input">
            </div>
            </div><!-- row-->
            </div><!--form-layout -->
            </form>
                 </div>
              </div><!-- collapse -->
            </div><!-- card -->
          </div><!-- accordion -->
      </div><!-- br-pagebody -->
      <br>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2021. INOPAK INSTITUTE. All Rights Reserved.</div>
          
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-l-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
        </div>
     </footer>
     <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        })
        $('#telp').mask('(000) 000-0000');
      });
    </script>
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../lib/moment/min/moment.min.js"></script>
    <script src="../lib/summernote/summernote-bs4.min.js"></script>
    <script src="../lib/peity/jquery.peity.min.js"></script>
    <script src="../lib/highlightjs/highlight.pack.min.js"></script>
    <script src="../lib/medium-editor/js/medium-editor.min.js"></script>
    <script src="../js/bracket.js"></script>
    <script type="text/javascript" src="../lib/image-upload/image-uploader.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script type="text/javascript">
		$('.input-images-1').imageUploader();

	</script>
 

  </body>
  
</html>
