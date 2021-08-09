
<!DOCTYPE html>
<html lang="en">
<?php  $thispage = "pengajuan";?>
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
  <link href="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../lib/sweet_alert/sweetalert2.min.css">
  <script src="../../lib/sweet_alert/sweetalert.min.js"></script>

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="../css/bracket.css">
  <style>
    /* Style the tab */
    .tab {
      overflow: hidden;
      
      background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 12px 15px;
      transition: 0.3s;
      margin:10px;
      
      
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
      border-radius: 25px;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #1bae9c;
      background-image: linear-gradient(to right, #1bae9c , #17a2b7);
      color:white;
      border-radius: 25px;
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      
      border-top: none;
    }</style>
  </head>

  <body>
    <!-- left panel -->
    <?php
    include 'asset/left_panel.php';
    ?>
    <!-- End Left Panrl -->

    <!-- head panel -->
    <?php
    include 'asset/head_panel.php';
    include '../view/lib/koneksi.php';
    
    ?>
    <!-- End head Panrl -->
    
    <?php 
    $id_pengajuan = $_GET['id_pengajuan'];
    $query = "SELECT * from tb_brainstorming where id_pengajuan ='$id_pengajuan'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result)

    ?>
    <!-- LARGE MODAL -->

    <div id="edit_ukm<?php echo $data['id_pengajuan'] ?>" class="modal fade">
     
     <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
       <div class="modal-content tx-size-sm">
         <div class="modal-header pd-x-20">
           <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Data IKM</h6>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body pd-20">

           <form action="aksi/ubah_data_ikm.php" method="post">
             <div id="accordion2" class="accordion" role="tablist" aria-multiselectable="true">
               <div class="card">
                 
                 <div class="card-header" role="tab" id="headingOne2">
                   <h6 class="mg-b-0">
                     <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                       Informasi Diri <small><i>self information</i></small>
                     </a>
                   </h6>
                 </div><!-- card-header -->

                 <div id="collapseOne2" class="collapse show" role="tabpanel" aria-labelledby="headingOne2">
                   
                   <div class="card-block pd-20">
                     <input  type="text" name="id_pengajuan"  hidden  value="<?php echo $data['id_pengajuan'] ?>" >
                     <input type="text" name="id_ikm"  hidden value="<?php echo $data['id_ikm'] ?>" >
                     <div class="row mg-b-25">
                       <div class="col-lg-4">
                         <div class="form-group">
                           <label class="form-control-label">Nama Lengkap: <span class="tx-danger">*</span></label>
                           <input class="form-control" id="nama_ikm" type="text" name="nama_ikm"  placeholder="Nama lengkap" value="<?php echo $data['nama'] ?>">
                           
                         </div>
                       </div><!-- col-4 -->
                       <div class="col-lg-4">
                         <div class="form-group">
                           <label class="form-control-label">Kelas: <span class="tx-danger">*</span></label>
                           <input class="form-control" id="kelas" type="text" name="kelas"  placeholder="Kelas" value="<?php echo $data['kelas'] ?>">
                         </div>
                       </div><!-- col-4 -->
                       <div class="col-lg-4">
                         <div class="form-group">
                           <label class="form-control-label">Telepon<span class="tx-danger">*</span></label>
                           <div class="input-group">
                             <div class="input-group-prepend">
                               <span class="input-group-text"><i class="fa fa-phone"></i></span>
                             </div>
                             <input type="text" class="form-control" id="telp" name="telp"value="<?php echo $data['telp'] ?>">
                           </div>
                         </div>
                       </div><!-- col-4 -->
                       <div class="col-lg-8">
                         <div class="form-group mg-b-10-force">
                           <label class="form-control-label">Alamat Lengkap <span class="tx-danger">*</span></label>
                           <textarea class="form-control" type="text" id="alamat" name="alamat"  value=""><?php echo $data['alamat'] ?></textarea>
                         </div>
                       </div><!-- col-8 -->
                       <div class="col-lg-4">
                         <div class="form-group mg-b-10-force">
                           <label class="form-control-label">Jenis Kelamin <span class="tx-danger">*</span></label>
                           <select class="form-control select2" data-placeholder="Choose country" name="gender" Required>
                            
                             <?php 
                             if($data['gender']=="L"){
                             echo'<option selected >Laki - Laki</option>';
                           }else{
                           echo'<option>Perempuan</option>';
                         }
                         ?>

                         <option value="L">Laki - Laki</option>
                         <option value="P">Perempuan</option>
                         
                       </select>
                     </div>
                   </div><!-- col-4 -->
                 </div><!-- row -->
                 
               </div>
             </div>
           </div>
           <div class="card">
             <div class="card-header" role="tab" id="headingTwo2">
               <h6 class="mg-b-0">
                 <a class="collapsed transition" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                   Kelengkapan Adm IKM <small><i>Completeness of Adm IKM</i></small>
                 </a>
               </h6>
             </div>
             <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
               <div class="card-block pd-20">
                
                 

                 <div class="form-group">
                   <label class="form-control-label">Nama Perusahaan<span class="tx-danger">*</span></label>
                   <input class="form-control" type="text" name="nama_perusahaan"  id="nama_perusahaan" placeholder="Nama Perusahaan" value="<?php echo $data['nama_perusahaan'] ?>">
                 </div>
                 
                 <div class="row ">
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label class="form-control-label">Nomor Halal<span class="tx-danger">*</span></label>
                       <input class="form-control" type="text" name="hallal"  id="hallal" placeholder="No Halal" value="<?php echo $data['halal'] ?>">
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label class="form-control-label">Nomor PIRT<span class="tx-danger">*</span></label>
                       <input class="form-control" type="text" name="pirt"  id="pirt" laceholder="No PIRT" value="<?php echo $data['pirt'] ?>">
                     </div>
                   </div>
                   
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label class="form-control-label">Media Penjualan <span class="tx-danger">*</span></label>
                       <textarea class="form-control" type="text" name="media_penjualan" id="media_penjualan"  placeholder="Media Penjualan"><?php echo $data['media_penjualan'] ?></textarea>
                       <small>*Contoh : Facebook, Instagram dll</small>
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="form-group">
                       <label class="form-control-label">Legalitas Lainnya<span class="tx-danger">*</span></label>
                       <textarea class="form-control" type="text" name="legalitas" id="legalitas" placeholder="Legalitas Lainnya"><?php echo $data['legalitas_lainnya'] ?></textarea>
                       <small>* Contoh :  Surat Izin Usaha Perdagangan (SIUP), NPWP Badan Usaha dll</small>
                     </div>
                   </div>
                   <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">Kapasitas Produksi (Per)<span class="tx-danger">*</span></label>
                      <select class="form-control" type="text" name="kapasitas_produksi" id="kapasitas_produksi" Required>
                        <option selected><?php echo $data['kapasitas_produk'] ?></seleted>
                          <option>hari</option>
                          <option>Bulan</option>
                          <option>Tahun</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Omset(Per)<span class="tx-danger">*</span></label>
                        <select class="form-control" type="text" name="omset" id="omset" Required>
                          <option selected><?php echo $data['omset'] ?></seleted>
                            <option>Bulan</option>
                            <option>Tahun</option>
                            
                          </select>
                        </div>
                      </div>
                    </div><!-- row-->
                  </div>
                </div>
              </div>
              
            </div><!-- accordion -->
          </div><!-- modal-body -->
          <div class="modal-footer" align="center">
           <input type="submit" name="ubah" class="btn btn-teal bd-0 btn-block" value="+ Simpan">
         </form>
       </div>
     </div>
   </div><!-- modal-dialog -->

 </div><!-- modal -->

 <!-- LARGE MODAL -->
 <div id="modaldemo3" class="modal fade">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content tx-size-sm">
      <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Upload Gambar</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-20">
        <form action="asset/ubah_gambar_profile.php" method="POST" enctype="multipart/form-data">
          <input class="form-control" type="text" id="id_ikm" name="id_ikm" placeholder="Enter lastname" hidden value="<?php echo $data['id_ikm'] ?>">
          <div class="ht-200 bg-gray-200 d-flex align-items-center justify-content-center">
            <input type="file" name="filegambar" id="file-2" class="inputfile" data-multiple-caption="{count} files selected" multiple="">
            <label for="file-2" class="if-outline if-outline-info">
              <i class="icon ion-ios-upload-outline tx-24"></i>
              <span>Choose a file...</span>
            </label>
          </div>
        </div><!-- modal-body -->
        <div class="modal-footer" align="center">
          <input type="submit" name="ubah" class="btn btn-teal bd-0 btn-block" value="+ Simpan">
        </form>
      </div>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->

<!-- LARGE MODAL -->
<!-- LARGE MODAL -->
<div id="takephoto" class="modal fade">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content tx-size-sm">
      <div class="modal-header pd-x-20">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Ambil Photo</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pd-20">
        
       
        <div id="camera">Capture</div>
        
        <div id="webcam">
          <button type="button" class="btn btn-teal bd-0 btn-block" onClick="preview()"> <i class="fa fa-camera"></i> Ambil Foto</button> 
          
        </div>
        <div id="hasil"></div>
      </div><!-- modal-body -->
      <div class="modal-footer" align="center">
        
        <input type=button id="simpan" value="Remove" onClick="batal()" class="btn btn-teal bd-0 btn-block" ><br>
        <input type=button id="simpan" value="Save" onClick="simpan()" class="btn btn-primary bd-0 btn-block" >
        
        
      </div>
    </div>
  </div><!-- modal-dialog -->
</div><!-- modal -->


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'London') "id="defaultOpen"><i class="fas fa-box-open"></i> Detail Produk Saya</button>
    <button class="tablinks" onclick="openCity(event, 'Paris')">Media dan Photo</button>
    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Desain Saya</button>
  </div><br>

  <div id="Paris" class="tabcontent">
    <div class="row row-sm mg-t-20">
      asdads
    </div>
    
  </div>

  <div id="Tokyo" class="tabcontent">
   <?php include '../view/404/404.html' ?>
  </div>
  

  
  <div id="London" class="tabcontent">
    <div align="right">
      <div class="mg-l-auto hidden-xs-down">
        
        <a href="../cetak/cetak2.php?nama_ikm=<?php echo $data['nama'] ?>&id_pengajuan=<?php echo $data['id_pengajuan'] ?>" class="btn btn-outline-info mg-l-5"><i class="fas fa-file-word"></i> Download Form Brainstorming</a>
      </div>
    </div>

    <div class="row row-sm mg-t-20">
      <div class="col-lg-4">
        <div class="card bd-0 shadow-base">
          <div class=" justify-content-between">
            <div>
              <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
                <div class="card">
                  <div class="card-header" role="tab" id="headingOne">
                    <h6 class="mg-b-0">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
                        <i class="fab fa-asymmetrik"></i> Info IKM 
                      </a>
                    </h6>
                  </div><!-- card-header -->

                  <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-block ">
                      <div align="center">
                        
                        <img src="../img/<?php echo $_SESSION['gambar']; ?>" class="wd-100 rounded-circle" alt="Foto IKM" ><br><br>
                        <button type="button"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modaldemo3"> <i class="icon ion-upload"></i> Unggah Foto </button>
                        <button  class="btn btn-info btn-sm" data-toggle="modal" data-target="#takephoto" > <i class="icon ion-camera"></i> Ambil Foto </button><br><br>
                        
                      </div>
                      <!-- Strat -->
                      <div class="br-mailbox-list-item unread ">
                        
                        <h6 class="tx-14 mg-b-10 tx-gray-800">Nama  Lengkap :</h6>
                        <p class="tx-12 tx-gray-600 mg-b-5"><?php echo $data['nama'] ?></p>
                      </div><!-- br-mailbox-list-item -->
                      <div class="br-mailbox-list-item unread">
                        <div class="d-flex justify-content-between mg-b-5">
                        </div><!-- d-flex -->
                        
                        <h6 class="tx-14 mg-b-10 tx-gray-800">Gender :</h6>
                        <p class="tx-12 tx-gray-600 mg-b-5">
                          <?php 
                          if($data['gender']=="L"){
                          echo " Laki - Laki ";
                        }else{
                          echo " Perempuan ";
                      }
                      ?>
                    </p>
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
                    </div><!-- d-flex -->
                    <h6 class="tx-14 mg-b-10 tx-gray-800">Nama Perusahaan :</h6>
                    <p class="tx-12 tx-gray-600 mg-b-5"><?php echo $data['nama_perusahaan'] ?></p>
                  </div><!-- br-mailbox-list-item -->
                  <div class="br-mailbox-list-item unread">
                    <div class="d-flex justify-content-between mg-b-5">
                    </div><!-- d-flex -->
                    <h6 class="tx-14 mg-b-10 tx-gray-800">Nomor Halal :</h6>
                    <p class="tx-12 tx-gray-600 mg-b-5"> <?php echo $data['halal'] ?></p>
                  </div><!-- br-mailbox-list-item -->
                  <!-- br-mailbox-list-item -->
                  <div class="br-mailbox-list-item unread">
                    <div class="d-flex justify-content-between mg-b-5">
                    </div><!-- d-flex -->
                    <h6 class="tx-14 mg-b-10 tx-gray-800">Nomor PIRT :</h6>
                    <p class="tx-12 tx-gray-600 mg-b-5">
                      <?php echo $data['pirt'] ?><br>
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
                    <h6 class="tx-14 mg-b-10 tx-gray-800">Kapasitas Produksi :</h6>
                    <p class="tx-12 tx-gray-600 mg-b-5">Per <?php echo $data['kapasitas_produk'] ?></p>
                  </div><!-- br-mailbox-list-item -->
                  <div class="br-mailbox-list-item unread">
                    <div class="d-flex justify-content-between mg-b-5">
                    </div><!-- d-flex -->
                    <h6 class="tx-14 mg-b-10 tx-gray-800">Omset :</h6>
                    <p class="tx-12 tx-gray-600 mg-b-5">Per <?php echo $data['omset'] ?></p>
                  </div><!-- br-mailbox-list-item --><br>
                </div>
              </div>
            </div>
            
            
          </div><!-- accordion -->
          
          
          <br>
          <div class="pd-30" align="center">
            <button type="button"  data-toggle="modal" data-target="#edit_ukm<?php echo $data['id_pengajuan'] ?>" class="btn btn-primary btn-sm btn-block" > <i class="fa fa-pen"></i> Ubah Data IKM </button>  
          </form>
        </div>
      </div>    
    </div>  
  </div>
</div>

<div class="col-lg-8">
  <div class="card bd-0 shadow-base">
    <div class="d-md-flex justify-content-between pd-25">
      <div>
        <?php include '../view/modal/alert.php' ?>
        <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Detile Produk</h6>
        <p><i class="fa fa-calendar-alt"></i> Diinput pada Tanggal <?php echo $data['tanggal'] ?></p>
        
        <!-- Start Card -->
        <div class="card">
          <div class="card-body">
            <form action="aksi/edit_detile_produk.php" name="MyForm" method="POST">
              
              <div class="row mg-b-30">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Jenis Produk <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" id="id_ikm" name="id_pengajuan" placeholder="Enter lastname" hidden value="<?php echo $data['id_pengajuan'] ?>">
                    <input class="form-control" type="text" id="jenis_produk" name="jenis_produk" disabled placeholder="Enter lastname" value="<?php echo $data['jenis_produk'] ?>">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Merk <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text"id="merk" name="merk" disabled placeholder="Enter lastname" value="<?php echo $data['merek'] ?>">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Tagline<span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" id="tagline" name="tagline" disabled value="<?php echo $data['tagline'] ?>">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Kelebihan Produk <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" id="kelebihan" name="kelebihan" disabled value="<?php echo $data['kelebihan_produk'] ?>">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Gramasi(g) <span class="tx-danger">*</span></label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="gramasi" name="gramasi"id="gramasi" disabled value="<?php echo $data['gramasi'] ?>">
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
                      <input type="text" class="form-control" name="gramasi_new" id="gramasi_new" disabled value="<?php echo $data['gramasi_new'] ?>">
                      <div class="input-group-append">
                        <span class="input-group-text">gram</span>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Segmentasi Produk <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" disabled id="segmentasi" name="segmentasi"  placeholder="Masukan Segementasi Produk"value="<?php echo $data['segmentasi'] ?>">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Harga Produk <span class="tx-danger">*</span></label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                      </div>
                      <input type="text" class="form-control" disabled name="harga" id="harga" value="<?php echo $data['harga'] ?>">
                    </div>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Varian Produk <span class="tx-danger">*</span></label>
                    <textarea  rows="4" cols="100" disabled name="varian" class="form-control" id="varian_prod" value="" Required><?php echo $data['varian_rasa'] ?></textarea>
                    <small>* Masukan Varian Produk</small>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Komposisi Produk <span class="tx-danger">*</span></label>
                    <textarea  rows="4" cols="100"disabled name="komposisi" class="form-control" id="komposisi" value=" " Required><?php echo $data['komposisi'] ?></textarea>
                    <small>* Masukan Komposisi Produk</small>
                  </div>
                </div>
              </div><!-- row -->
              <div class="form-group">
                <label class="form-control-label">Redaksi Produk <span class="tx-danger">*</span></label>
                <textarea  rows="6" cols="100" disabled name="redaksi" class="form-control" id="redaksi" value=" " Required><?php echo $data['redaksi'] ?></textarea>
                <small>* Masukan redaksi Produk</small>
              </div>
              
              
              <div class="form-group">
                <label class="form-control-label">Keterangan Lainnya <span class="tx-danger">*</span></label>
                <textarea  rows="6" cols="100" disabled name="keterangan" class="form-control" id="keterangan" value=" " Required><?php echo $data['ket_lain'] ?></textarea>
                <small>* Contoh : cara memasak , Saran Penyajian</small>
              </div>
              
              
              
              <button type="button" id="aktif" class="btn btn-info btn-block" onclick="myFunction()"> <i class="fa fa-pen"></i> Update Data</button>
              <input type="submit" id="ubah" class="btn btn-info btn-block" name="ubah" hidden value="+ Simpan">
              
            </form>
          </div><!-- card Body -->
        </div><!-- End Card -->

      </div>

    </div>
  </div>
</div>
</div>
</div>


<!-- start you own content here -->

</div><!-- br-pagebody -->

</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
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
<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/jquery-ui/ui/widgets/datepicker.js"></script>
<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../lib/moment/min/moment.min.js"></script>
<script src="../lib/peity/jquery.peity.min.js"></script>
<script src="../js/bracket.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="../lib/take_photo/webcam.min.js"></script>
<script>
  function myFunction() {
    document.getElementById("aktif").hidden = true;
    document.getElementById("ubah").hidden = false;  
    document.getElementById("jenis_produk").disabled = false;
    document.getElementById("merk").disabled = false;
    document.getElementById("tagline").disabled = false;
    document.getElementById("kelebihan").disabled = false;
    document.getElementById("gramasi").disabled = false;
    document.getElementById("gramasi_new").disabled = false;
    document.getElementById("segmentasi").disabled = false;
    document.getElementById("harga").disabled = false;
    document.getElementById("varian_prod").disabled = false;
    document.getElementById("komposisi").disabled = false;
    document.getElementById("redaksi").disabled = false;
    document.getElementById("keterangan").disabled = false;
  }
</script>
<script language="Javascript">
        // konfigursi webcam
        Webcam.set({
          width: 250,
          height: 250,
          image_format: 'jpg',
          jpeg_quality: 200
        });
        Webcam.attach( '#camera' );
        
        function preview() {
            // untuk preview gambar sebelum di upload
            Webcam.freeze();
            // ganti display webcam menjadi none dan simpan menjadi terlihat
            document.getElementById('webcam').style.display = 'none';
            document.getElementById('simpan').style.display = '';
          }
          
          function batal() {
            // batal preview
            Webcam.unfreeze();
            
            // ganti display webcam dan simpan seperti semula
            document.getElementById('webcam').style.display = '';
            document.getElementById('simpan').style.display = 'none';
          }
          
          function simpan() {
            // ambil foto
            Webcam.snap( function(data_uri) {
              
                // upload foto
                Webcam.upload( data_uri, 'upload.php', function(code, text) {} );
                
                // tampilkan hasil gambar yang telah di ambil
                document.getElementById('hasil').innerHTML = 
                '<p>Hasil : </p>' + 
                '<img src="'+data_uri+'"/>';
                
                Webcam.unfreeze();
                
                document.getElementById('webcam').style.display = '';
                document.getElementById('simpan').style.display = 'none';
              } );
          }
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
  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>
