<!DOCTYPE html>
<html lang="en">
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

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../../css/bracket.css">
  </head>
  <?php 
  $id_ikm = $_GET['id_ukm'];
	session_start();
	if($_SESSION['level']==""){
		header("location:../login/login.php?pesan=belum_login");
	}
	?>
  <body class="collapsed-menu email ">
    <!-- left panel -->
    <?php
    include '../../asset/left_panel.php';
    ?>
    <!-- End Left Panrl -->

    <!-- head panel -->
    <?php
    include '../../asset/head_panel.php';
    include '../lib/koneksi.php';
    ?>
    <!-- End head Panrl -->
   
    <div class="br-subleft">
      <div class="pd-10">
        <a href="" class="btn btn-teal bd-0 btn-compose" data-toggle="modal" data-target="#modalCompose"><i class="icon ion-ios-compose-outline"></i> Compose</a>
      </div>

      <nav class="nav br-nav-mailbox flex-column">
        <a href="" class="nav-link active"><i class="icon ion-ios-filing-outline"></i> Inbox</a>
        <a href="" class="nav-link"><i class="icon ion-ios-folder-outline"></i> Drafts</a>
        <a href="" class="nav-link"><i class="icon ion-ios-paperplane-outline"></i> Sent</a>
        <a href="" class="nav-link"><i class="icon ion-ios-trash-outline"></i> Trash</a>
      </nav>

      <div class="d-flex justify-content-between align-items-center mg-t-20 pd-x-10 bd-b bd-white-1 pd-b-5">
        <h6 class="tx-uppercase tx-10 mg-b-0 tx-roboto tx-white-7">My Folder</h6>
        <a href="" class="tx-uppercase tx-10 tx-info tx-roboto">+ New</a>
      </div>

      <nav class="nav br-nav-mailbox flex-column">
        <a href="" class="nav-link"><i class="icon ion-ios-folder-outline"></i> Social</a>
        <a href="" class="nav-link"><i class="icon ion-ios-folder-outline"></i> Promotions</a>
        <a href="" class="nav-link"><i class="icon ion-ios-folder-outline"></i> Internet</a>
      </nav>

      <div class="d-flex justify-content-between align-items-center mg-t-20 pd-x-10 bd-b bd-white-1 pd-b-5">
        <h6 class="tx-uppercase tx-10 mg-b-0 tx-roboto tx-white-7">Labels</h6>
        <a href="" class="tx-10 tx-uppercase tx-info tx-roboto">+ New</a>
      </div>

      <nav class="nav br-nav-mailbox flex-column">
        <a href="" class="nav-link"><i class="icon ion-ios-pricetag-outline"></i> Facebook</a>
        <a href="" class="nav-link"><i class="icon ion-ios-pricetag-outline"></i> Twitter</a>
      </nav>
    </div><!-- br-subleft -->
      
      <div class="br-mailbox-list">
      <div class="br-mailbox-list-header" >
        
        <a href="" id="showMailBoxLeft" class="show-mailbox-left hidden-sm-up">
          <i class="fa fa-arrow-right"></i>
        </a>
        <h6 class="tx-inverse mg-b-0 tx-13 tx-uppercase">Informasi IKM<span class="tx-roboto">(2)</span></h6>
        <div class="btn-group" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-light disabled pd-x-25"><i class="fa fa-angle-left"></i></button>
          <button type="button" class="btn btn-light pd-x-25"><i class="fa fa-angle-right"></i></button>
        </div>
      </div><!-- br-mailbox-list-header -->
      <div class="br-mailbox-list-body">       
      <?php 
    $query = "SELECT * from brainstorming";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result)
    ?>
        <div class="br-mailbox-list-item ">
          <div class="d-flex justify-content-between mg-b-5">

          </div><!-- d-flex -->
          <h6 class="tx-14 mg-b-10 tx-gray-800">Nama Lengkap IKM :</h6>
          <p class="tx-12 tx-gray-600 mg-b-5"><?php echo $data['nama'] ?></p>
        </div><!-- br-mailbox-list-item -->
        <div class="br-mailbox-list-item unread">
          <div class="d-flex justify-content-between mg-b-5">
          </div><!-- d-flex -->
          <h6 class="tx-14 mg-b-10 tx-gray-800">Alamat Lengkap :</h6>
          <p class="tx-12 tx-gray-600 mg-b-5"><?php echo $data['alamat'] ?></p>
        </div><!-- br-mailbox-list-item -->
        <div class="br-mailbox-list-item unread">
          <div class="d-flex justify-content-between mg-b-5">
          </div><!-- d-flex -->
          <h6 class="tx-14 mg-b-10 tx-gray-800">No Kontak :</h6>
          <p class="tx-12 tx-gray-600 mg-b-5"><?php echo $data['telp'] ?></p>
        </div>
       

        
        <div class="br-mailbox-list-item unread">
          <div class="d-flex justify-content-between mg-b-5">
          <div>
              
            </div>
            <span class="tx-12">10 hours ago</span>
        </div><!-- d-flex -->
          <h6 class="tx-14 mg-b-10 tx-gray-800">Nama Perusahaan :</h6>
          <p class="tx-12 tx-gray-600 mg-b-5"><?php echo $data['nama_perusahaan'] ?></p>
        </div><!-- br-mailbox-list-item -->
        <!-- br-mailbox-list-item -->
        <div class="br-mailbox-list-item unread">
          <div class="d-flex justify-content-between mg-b-5">
          </div><!-- d-flex -->
          <h6 class="tx-14 mg-b-10 tx-gray-800">Hallal dan PIRT :</h6>
          <p class="tx-12 tx-gray-600 mg-b-5">
           <b> PIRT No .</b> <?php echo $data['pirt'] ?><br>
           <b>Halal No. </b> <?php echo $data['no_halal'] ?>
          </p>
        </div><!-- br-mailbox-list-item -->
        <div class="br-mailbox-list-item unread">
          <div class="d-flex justify-content-between mg-b-5">
          </div><!-- d-flex -->
          <h6 class="tx-14 mg-b-10 tx-gray-800">Legalitas Produk Lainnya :</h6>
          <p class="tx-12 tx-gray-600 mg-b-5"><?php echo $data['legalitas_lainnya'] ?></p>
        </div><!-- br-mailbox-list-item -->
        <div class="br-mailbox-list-item unread">
          <div class="d-flex justify-content-between mg-b-5">
          </div><!-- d-flex -->
          <h6 class="tx-14 mg-b-10 tx-gray-800">Kapasitas Produk :</h6>
          <p class="tx-12 tx-gray-600 mg-b-5">Per <?php echo $data['kapasitas_produksi'] ?></p>
        </div><!-- br-mailbox-list-item -->
     
        </div>
    </div><!-- br-mailbox-list -->
    <div class="br-mailbox-body">
      <div class="br-msg-header d-flex justify-content-between">
        <div class="card-body">
        <div class="form-layout form-layout-1 bg-white">
          <!-- alert -->
        <div class="alert alert-info alert-bordered pd-y-20" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <div class="d-flex align-items-center justify-content-start">
    <i class="icon ion-ios-information tx-52 tx-info mg-r-20"></i>
    <div>
      <h5 class="mg-b-2 tx-indo">Detile Produk</h5>
      <p class="mg-b-0 tx-gray">Mohon Isi data dibawah ini dengan Baik dan Benar</p>
    </div>
  </div><!-- d-flex -->
</div><!-- alert -->
  <div class="card">
      <div class="card-body">
        <h5 class="card-title">The Card Title</h5>
            <div class="row mg-b-30">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Jenis Produk <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname"  placeholder="Enter lastname" value="<?php echo $data['jenis_produk'] ?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Merk <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname"  placeholder="Enter lastname" value="<?php echo $data['merek'] ?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Tagline<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname"  value="<?php echo $data['tagline'] ?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Kelebihan Produk <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname"  value="<?php echo $data['kelebihan'] ?>">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
              <div class="form-group">
                  <label class="form-control-label">Gramasi(g) <span class="tx-danger">*</span></label>
                  <div class="input-group">
                <input type="text" class="form-control" name="gramasi"id="gramasi" value="<?php echo $data['gramasi'] ?>">
                <div class="input-group-append">
                  <span class="input-group-text">gram</span>
                </div>
              </div>
                </div>
              </div>
              <div class="col-lg-6">
              <div class="form-group">
                  <label class="form-control-label">Gramasi(g) Upgrade <span class="tx-danger">*</span></label>
                  <div class="input-group">
                <input type="text" class="form-control" name="gramasi"id="gramasi" value="<?php echo $data['gramasi'] ?>">
                <div class="input-group-append">
                  <span class="input-group-text">gram</span>
                </div>
              </div>
                </div>
              </div>
             
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Segmentasi Produk <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="lastname"  placeholder="Masukan Segementasi Produk">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
              <div class="form-group">
                  <label class="form-control-label">Harga Produk <span class="tx-danger">*</span></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp.</span>
                   </div>
                <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $data['harga'] ?>">
              </div>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Varian Produk <span class="tx-danger">*</span></label>
                  <textarea  rows="4" cols="100" name="varian" class="form-control" id="varian" value="" Required><?php echo $data['varian'] ?></textarea>
                  <small>* Masukan Varian Produk</small>
                 </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Komposisi Produk <span class="tx-danger">*</span></label>
                  <textarea  rows="4" cols="100" name="komposisi" class="form-control" id="komposisi" value=" " Required><?php echo $data['komposisi'] ?></textarea>
                  <small>* Masukan Komposisi Produk</small>
                 </div>
            </div>
            <div class="row-lg-9">
                <div class="form-group">
                  <label class="form-control-label">Redaksi Produk <span class="tx-danger">*</span></label>
                  <textarea  rows="6" cols="100" name="komposisi" class="form-control" id="komposisi" value=" " Required><?php echo $data['komposisi'] ?></textarea>
                  <small>* Masukan Komposisi Produk</small>
                 </div>
            </div>
            
            </div>
            <button type="button" class="btn btn-info" > Update Data</button>
            <button type="button" class="btn btn-primary" > <i class="icon ion-printer"></i> Export Data </button>
      </div><!-- card Body -->
    </div><!-- End Card -->
        </div>
        </div>
        <!-- start you own content here -->

      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <script src="../../lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="../../lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../lib/moment/min/moment.min.js"></script>
    <script src="../../lib/peity/jquery.peity.min.js"></script>

    <script src="../../../js/bracket.js"></script>
    <script>
      $(function(){
        'use strict';

        // show only the icons and hide left menu label by default
        $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');

        $(document).on('mouseover', function(e){
          e.stopPropagation();
          if($('body').hasClass('collapsed-menu')) {
            var targ = $(e.target).closest('.br-sideleft').length;
            if(targ) {
              $('body').addClass('expand-menu');

              // show current shown sub menu that was hidden from collapsed
              $('.show-sub + .br-menu-sub').slideDown();

              var menuText = $('.menu-item-label,.menu-item-arrow');
              menuText.removeClass('d-lg-none');
              menuText.removeClass('op-lg-0-force');

            } else {
              $('body').removeClass('expand-menu');

              // hide current shown menu
              $('.show-sub + .br-menu-sub').slideUp();

              var menuText = $('.menu-item-label,.menu-item-arrow');
              menuText.addClass('op-lg-0-force');
              menuText.addClass('d-lg-none');
            }
          }
        });

        // depcrecated
        //$('.br-mailbox-list').perfectScrollbar();

        new PerfectScrollbar('.br-mailbox-list', {
          suppressScrollX: true
        });

        $('#showMailBoxLeft').on('click', function(e){
          e.preventDefault();
          if($('body').hasClass('show-mb-left')) {
            $('body').removeClass('show-mb-left');
            $(this).find('.fa').removeClass('fa-arrow-left').addClass('fa-arrow-right');
          } else {
            $('body').addClass('show-mb-left');
            $(this).find('.fa').removeClass('fa-arrow-right').addClass('fa-arrow-left');
          }
        });
      });
    </script>
  </body>
</html>
