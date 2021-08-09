<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href=""><span>[</span>INOPAK <i>plus+</i><span>]</span></a></div>
<div id="myDIV">
    <div class="br-sideleft sideleft-scrollbar "id="Mymenu">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul  class="br-sideleft-menu">
      <li class="br-menu-item ">
          <a href="../admin/blank" class="br-menu-link <?php if($thispage =="dashboard") echo 'active' ?>">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="../front_page/formulir" class="br-menu-link <?php if($thispage =="formulir") echo 'active' ?> ">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Form Brainstorming</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <label class="sidebar-label pd-x-10 mg-t-20 op-3">Management Data</label>
        <li class="br-menu-item">
          <a href="../data_ukm/data_ukm?id_kota=0" class="br-menu-link <?php if($thispage =="ukm") echo 'active' ?>">
            <i class="menu-item-icon icon fa fa-user"></i>
            <span class="menu-item-label">Data IKM</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <?php
          include 'lib/koneksi.php';
          $sql = "SELECT * FROM tb_pengajuan where status='0'";
          $query = $koneksi->query($sql);
        ?>
        <li class="br-menu-item">
          <a href="../pengajuan/data_pengajuan" class="br-menu-link <?php if($thispage =="pengajuan") echo 'active' ?>">
            <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
            <span class="menu-item-label">Data Pengajuan IKM <span class="badge bg-danger tx-white"> <?php echo $query->num_rows ?> </span></span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <label class="sidebar-label pd-x-10 mg-t-20 op-3">Management User</label>
        
        <li class="br-menu-item">
          <a href="#" class="br-menu-link <?php if($sub =="setting") echo 'active show-sub' ?>">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Pengaturan Aplikasi</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="../pengguna/data_pengguna" class="sub-link <?php if($thispage =="pengguna") echo 'active' ?>">Database Pengguna</a></li>
            <li class="sub-item"><a href="../pengguna/data_pengguna" class="sub-link <?php if($thispage =="data_pengguna") echo 'active' ?>">Pengaturan Pengguna</a></li>
            <li class="sub-item"><a href="../kota/data_kota" class="sub-link <?php if($thispage =="kota") echo 'active' ?>">Database Kota</a></li>
            
          </ul>
        </li><!-- br-menu-item -->
        </ul>
      <br>
    </div><!-- br-sideleft -->
    <script>
// This will auto show sub menu using the slideDown()
// when top level menu have a class of .show-sub
$('.show-sub + .br-menu-sub').slideDown();

// This will show sub navigation menu on left sidebar
// only when that top level menu have a sub menu on it.
$('.br-menu-link').on('click', function(){
  var nextElem = $(this).next();
  var thisLink = $(this);
  if(nextElem.hasClass('br-menu-link')) {
    thisLink.addClass('active');
  }

  if(nextElem.hasClass('br-menu-sub')) {

    if(nextElem.is(':visible')) {
      thisLink.removeClass('show-sub');
      nextElem.slideUp();
    } else {
      $('.br-menu-link').each(function(){
        $(this).removeClass('show-sub');
      });

      $('.br-menu-sub').each(function(){
        $(this).slideUp();
      });

      thisLink.addClass('show-sub');
      nextElem.slideDown();
    }
    return false;
  }
});

</script>