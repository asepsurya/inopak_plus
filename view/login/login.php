<?php
session_start();
 ?>
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
    <link rel="stylesheet" href="../lib/sweet_alert/sweetalert2.min.css">
    <script src="../lib/sweet_alert/sweetalert.min.js"></script>
    <title>LOGIN FORM</title>

    <!-- vendor css -->
    <link href="../../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../lib/select2/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../lib/sweet_alert/sweetalert2.min.css">
    <script src="../../lib/sweet_alert/sweetalert.min.js"></script>
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../../css/bracket.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> INOPAK <span class="tx-info">plus+</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-60">The Admin Template For Perfectionist</div>

        <form name="my-Form" action="cek_login.php" method="POST" data-parsley-validate>
        <div class="form-group">
          <label>Email : <span class="tx-danger">*</span></label>
          <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
        </div><!-- form-group -->
        <div class="form-group">
          <label>Password <span class="tx-danger">*</span></label>
          <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
          <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
        <?php 
      include '../modal/alert.php';
      include '../lib/koneksi.php';
      include '../captcha_google/proses.php';
  	    ?>
        <button type="submit" class="btn btn-info btn-block">Masuk</button>
        </form>
        <div class="mg-t-60 tx-center">Anda Belum Punya Akun <a href="" class="tx-info"  data-toggle="modal" data-target="#modaldemo3">Daftar</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
   
<!-- LARGE MODAL -->
<div id="modaldemo3" class="modal fade ">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Daftar IKM ( Industri Kecil Menengah ) Baru</h6>
                </div>
        
                <div class="modal-body ">
               
                
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
                
              
                  <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> INOPAK <span class="tx-info">plus+</span> <span class="tx-normal">]</span></div>
                  <div class="tx-center mg-b-20">The Admin Template For Perfectionist</div>
                  <form action="tambah_pengguna.php" method="POST" >
                  <div class="pd-10">
                  
                  <div class="row pd-t-20">
                  <div class="form-group col-lg-6">
                    <label> Nama Depan</label>
                    <input type="text" name="nm_depan" class="form-control" placeholder="Nama Depan">
                    
             </div><!-- col-4 -->
            <div class="form-group col-lg-6 mg-t-20 mg-lg-t-0">
                 <label> Nama Belakang</label>
                <input type="text" name="nm_belakang" class="form-control" placeholder="Nama Belakang">
            </div><!-- col-4 -->
          </div>
                  <div class="form-group">
                 
                  <select class="select2-show-search w-100 form-control" data-width="100%" id="select4"  onchange="changeValue(this.value)" name="nm" required>
                  <option ReadOnly> - Asal Kota / Group - </option>
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
                  
                 <input  type="text" hidden class="form-control" id="hrg" name="id_kota">
                 </div><!-- form-group -->
                  <div class="form-group">
                  <label>Email</label>
                    <input type="Email" name="username" id="email" class="form-control " placeholder="Example@gmail.com">
                  </div><!-- form-group -->
                  
                  <div class="row pd-t-20">
            <div class="form-group col-lg-6">
                <label > Password</label>
                <input type="password" name="password" class="form-control password" placeholder="Sandi">
                <small>Gunakan minimal 8 karakter dengan campuran huruf, angka & simbol</small>
            </div><!-- col-4 -->
            <div class="form-group col-lg-6 mg-t-20 mg-lg-t-0">
                <label> Konfirmasi Passsword</label>
                <input type="password" name="password2" class="form-control password" placeholder="Konfirmasi"><br>
                <input type="checkbox" class="form-checkbox "> Tampilkan Password   
            </div><!-- col-4 -->
            
          </div>
                  <div class="form-group">
                    <label> No Telepon</label>
                    <input type="text" name="telp" class="form-control " placeholder="No Telepon">
                    <small>Gunakan nomor telepon yang masih aktif</small>
                  </div><!-- form-group -->
                 
                  </div><!-- modal-body -->
                <div class="modal-footer" align="center">
                   
                  <input type="submit" data-dismiss="modal" class="btn btn-primary btn-block" value="Login Saja"><br>
                  <input type="submit" name="input" class="btn btn-info btn-block" value="+ Daftar Pengguna Baru">
                  </form>
                </div>
              </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/select2/js/select2.min.js"></script> 
  

    <script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.password').attr('type','text');
			}else{
				$('.password').attr('type','password');
			}
		});
    $('#select4').select2({
          containerCssClass: 'select2-outline-success',
          dropdownCssClass: 'bd-success hover-success',
          minimumResultsForSearch: Infinity, // disabling search
          placeholder: 'Choose one'
        });
        
	});
</script>


  <script type="text/javascript">
  
  <?php echo $jsArray; ?>
  function changeValue(kd_brg) {
    document.getElementById("hrg").value = hrg_brg[kd_brg].hrg;
  };
</script>
<script type="text/javascript">
 	$(document).ready(function(){
  document.getElementById("email").value = <?php echo $_SESSION['username'] ?>;
 });
   
</script>

  </body>
</html>
