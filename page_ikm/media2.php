
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
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
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
          <h4>Import Media <small><i>Brainstorming Form</i></small></h4>
          <p class="mg-b-0">Mohon Isi Form dibawah ini dengan Benar.</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
      <?php include '../view/modal/alert.php' ?> 
       
        <!-- start you own content here -->
        <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <h6 class="mg-b-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                    Upload Kegiatan IKM
                  </a>
                </h6>
              </div><!-- card-header -->
              
              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-block pd-20">
                <form action="aksi/tambah_media.php" method="POST" enctype="multipart/form-data">
                <label>1. Upload photo <b> Luar dan Dalam Kemasan</b></label>
                <div class="input-images" style="padding-top: .5rem;"></div>
                <div align="right"><small > <a href="#" data-toggle="popover-hover" data-img="https://bisnisukm.com/uploads/2017/01/ide-kemasan-keripik-tortilla-chips-760x830.jpg"> Show Example </a> </small></div>
                <br>
                <input type="submit" name="input" class="btn btn-info btn-block " value="Upload"><br>
                </form>
                <form action="aksi/tambah_media2.php" method="POST" enctype="multipart/form-data">
                <label class="bold">2. Upload photo <b>Tempat Produksi</b></label>
                <div class="input-images-2" style="padding-top: .5rem;"></div>
                <div align="right"><small > <a href="#" data-toggle="popover-hover" data-img="https://3.bp.blogspot.com/-qHCSgOddK5c/V5YRLLhYpzI/AAAAAAAAJVo/0gRsxhUO6IQYr9yF-2oE5lNIYwZIae0rgCEw/s1600/l.jpg"> Show Example </a> </small></div>
                <br>
                <input type="submit" name="input" class="btn btn-info btn-block " value="Upload">
            </div>
            <br>
          </div><!-- accordion -->
        </form>
      </div><!-- br-pagebody -->
    
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
    
    <script type="text/javascript">
	let preloaded = [
   
];

$('.input-images').imageUploader({
    preloaded: preloaded,
    imagesInputName: 'foto',
    preloadedInputName: 'foto',
});
$('.input-images-2').imageUploader({
    preloaded: preloaded,
    imagesInputName: 'foto2',
    preloadedInputName: 'foto',
});
    
    $('[data-toggle="popover-hover"]').popover({
      html: true,
      trigger: 'hover',
      placement: 'bottom',
      content: function () { return '<b>Contoh Gambar :</b><br><img src="' + $(this).data('img') + '" width="250" />'; }
    });

    // popovers initialization - on click
    $('[data-toggle="popover-click"]').popover({
      html: true,
      trigger: 'click',
      placement: 'left',
      content: function () { return '<b>Contoh Gambar :</b><br><img src="' + $(this).data('img') + '" width="250" />'; }
    });
	</script>
  </body>
  
</html>
