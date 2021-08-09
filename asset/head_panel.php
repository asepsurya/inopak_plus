
<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
  <div class="br-header-left">
    <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
    <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    <div class="input-group hidden-xs-down wd-230 transition">
      <input id="searchbox" type="text" class="form-control" placeholder="Search">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
      </span>
    </div><!-- input-group -->
  </div><!-- br-header-left -->
  <div class="br-header-right">
    <nav class="nav">
     
      <div class="dropdown">
        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
          <span class="logged-name hidden-md-down"><?php echo $_SESSION['nama']; ?></span>
          <img src="https://yt3.ggpht.com/ytc/AAUvwngKDQxeDaep_aT_0c8kkyGSd9FGET2wOy4yDrgn=s900-c-k-c0x00ffffff-no-rj" class="wd-32 rounded-circle" alt="">
          <span class="square-10 bg-success"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-header wd-250">
          <div class="tx-center">
            <a href=""><img src="https://yt3.ggpht.com/ytc/AAUvwngKDQxeDaep_aT_0c8kkyGSd9FGET2wOy4yDrgn=s900-c-k-c0x00ffffff-no-rj" class="wd-80 rounded-circle" alt=""></a>
            <h6 class="logged-fullname"><?php echo $_SESSION['username']; ?></h6>
            
          </div>
          <hr>
          <div class="tx-center">
            <span class="profile-earning-label">Level Akun : </span>
            <h3 class="profile-earning-amount"><?php echo $_SESSION['nama']; ?><i class="icon ion-ios-arrow-thin-up tx-success"></i></h3>
            <span class="profile-earning-text"><?php echo $_SESSION['id_kota']; ?></span>
          </div>
          <hr>
          <ul class="list-unstyled user-profile-nav">
            <li><a href="../../view/login/logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
          </ul>
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
    </nav>
    <div class="navicon-right">
      <a id="btnRightMenu" href="" class="pos-relative">
        <i class="icon ion-ios-gear-outline"></i>
        <!-- start: if statement -->
        <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
        <!-- end: if statement -->
      </a>
    </div><!-- navicon-right -->
  </div><!-- br-header-right -->
</div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->