<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
    session_start();
    $thispage = "dashboard" ; ?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

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
    
    
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <span class="breadcrumb-item active">Halaman Dashboard</span>
        </nav>
      </div>
     
       
    
        
        <!-- start you own content here -->
        <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-info rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Produk</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">1,975,224</p>
                  <span class="tx-11 tx-roboto tx-white-8">24% higher yesterday</span>
                </div>
              </div>
              <div id="ch1" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-purple rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Pengguna</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">$329,291</p>
                  <span class="tx-11 tx-roboto tx-white-8">$390,212 before tax</span>
                </div>
              </div>
              <div id="ch3" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Jumlah Kota</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">54.45%</p>
                  <span class="tx-11 tx-roboto tx-white-8">23% average duration</span>
                </div>
              </div>
              <div id="ch2" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Jumlah IKM</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">32.16%</p>
                  <span class="tx-11 tx-roboto tx-white-8">65.45% on average time</span>
                </div>
              </div>
              <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->
        
        <div class="row row-sm mg-t-20">
          <div class="col-lg-8">
            <div class="card bd-0 shadow-base">
              <div class="d-md-flex justify-content-between pd-25">
                <div>
                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">How Engaged Our Users Daily</h6>
                  <p>Past 30 Days — Last Updated Oct 14, 2017</p>
                </div>
                <div class="d-sm-flex">
                  <div>
                    <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Bounce Rate</p>
                    <h4 class="tx-lato tx-inverse tx-bold mg-b-0">23.32%</h4>
                    <span class="tx-12 tx-success tx-roboto">2.7% increased</span>
                  </div>
                  <div class="bd-sm-l pd-sm-l-20 mg-sm-l-20 mg-t-20 mg-sm-t-0">
                    <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Page Views</p>
                    <h4 class="tx-lato tx-inverse tx-bold mg-b-0">38.20%</h4>
                    <span class="tx-12 tx-danger tx-roboto">4.65% decreased</span>
                  </div>
                  <div class="bd-sm-l pd-sm-l-20 mg-sm-l-20 mg-t-20 mg-sm-t-0">
                    <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Time On Site</p>
                    <h4 class="tx-lato tx-inverse tx-bold mg-b-0">12:30</h4>
                    <span class="tx-12 tx-success tx-roboto">1.22% increased</span>
                  </div>
                </div><!-- d-flex -->
              </div><!-- d-flex -->

              <div class="pd-l-25 pd-r-15 pd-b-25">
                <div id="ch5" class="ht-250 ht-sm-300"></div>
              </div>
            </div><!-- card -->
      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <script>
      $(document).ready(function(){
        'use strict';

        $('#wizard1').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>'
        });

        $('#wizard2').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          onStepChanging: function (event, currentIndex, newIndex) {
            if(currentIndex < newIndex) {
              // Step 1 form validation
              if(currentIndex === 0) {
                var fname = $('#firstname').parsley();
                var lname = $('#lastname').parsley();

                if(fname.isValid() && lname.isValid()) {
                  return true;
                } else {
                  fname.validate();
                  lname.validate();
                }
              }

              // Step 2 form validation
              if(currentIndex === 1) {
                var email = $('#email').parsley();
                if(email.isValid()) {
                  return true;
                } else { email.validate(); }
              }
            // Always allow step back to the previous step even if the current step is not valid.
            } else { return true; }
          }
        });

        $('#wizard3').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          stepsOrientation: 1
        });

        $('#wizard4').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          cssClass: 'wizard step-equal-width'
        });

        $('#wizard5').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          cssClass: 'wizard wizard-style-1'
        });

        $('#wizard6').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          cssClass: 'wizard wizard-style-2'
        });

        $('#wizard7').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          cssClass: 'wizard wizard-style-3'
        });

      });
    </script>

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../lib/moment/min/moment.min.js"></script>
    <script src="../lib/peity/jquery.peity.min.js"></script>
    <script src="../lib/highlightjs/highlight.pack.min.js"></script>
    <script src="../lib/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="../lib/parsleyjs/parsley.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script src="../js/bracket.js"></script>
    <?php if(isset($_SESSION['login'])){ ?>
    <script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'bottom-end',
    showConfirmButton: false,
    timer: 3000
  });
 
    Toast.fire({
    type: 'success',
    title: 'Signed in successfully'
  })                   
      </script>
      <?php unset($_SESSION['login']); } ?>
      
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    
  </body>
</html>
