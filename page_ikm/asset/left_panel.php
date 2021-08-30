<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href=""><span>[</span>INOPAK <i>plus+</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
      
      <li class="br-menu-item ">
          <a href="dashboard" class="br-menu-link <?php if($thispage =="dashboard") echo 'active' ?>">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <?php 
        include '../view/lib/koneksi.php';
        $id_ikm=$_SESSION['id_ikm'];
        $data1 = mysqli_query($koneksi,"select * from tb_cek where id_ikm='$id_ikm'");
        $cek = mysqli_num_rows($data1);
        if($cek > 0){
        }else{
          echo' <li class="br-menu-item">
          <a href="formulir" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Form Brainstorming</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->';
        }
        ?>
       
        
        <label class="sidebar-label pd-x-10 mg-t-20 op-3">Management Data</label>
        <li class="br-menu-item">
          <a href="data_ukm?id_kota=<?php echo $_SESSION['id_kota'] ?>" class="br-menu-link <?php if($thispage =="ukm") echo 'active' ?>">
            <i class="menu-item-icon icon fa fa-user"></i>
            <span class="menu-item-label">Data IKM yang terdaftar</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
       
        <li class="br-menu-item">
          <a href="data_pengajuan" class="br-menu-link <?php if($thispage =="pengajuan") echo 'active' ?>">
            <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
            <span class="menu-item-label">Data Produk Saya</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <label class="sidebar-label pd-x-10 mg-t-20 op-3">Management Pengguna</label>
        <li class="br-menu-item">
          <a href="data_pengajuan" class="br-menu-link <?php if($thispage =="2") echo 'active' ?>">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-22"></i>
            <span class="menu-item-label">Pengaturan Akun</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
      <br>
    </div><!-- br-sideleft -->
   