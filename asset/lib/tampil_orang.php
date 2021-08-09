<?php
           include 'koneksi.php';
           $get_on =mysqli_query($koneksi, "SELECT * FROM user WHERE online='1'");
           while ($row=mysqli_fetch_assoc($get_on)){
           ?>
            <a href="" class="contact-list-link">
              <div class="d-flex">
                  
                <div class="pos-relative">
                  <img src="https://inopakinstitute.or.id/wp-content/uploads/2021/05/user-default.jpg" alt="">
                  <div class="contact-status-indicator bg-success"></div>
                </div>
                <div class="contact-person">
                
                  <p><?php echo $row['nama'] ?></p>
                  <?php
                  $id_kota=$_SESSION['id_kota'];
                  $q=mysqli_query($koneksi, "SELECT * FROM tb_kota WHERE id_kota='$id_kota'");
                  $data = mysqli_fetch_assoc($q)
                  ?>
                  <span><?php echo $data['nama_kota'] ?></span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <?php }?>
          </div><!-- contact-list -->
        

          <label class="sidebar-label pd-x-25 mg-t-25">IKM yang baru Saja Aktif (Offline)</label>
          <div class="contact-list pd-x-10">
             <?php
           include 'lib/koneksi.php';
           $get_on =mysqli_query($koneksi, "SELECT * FROM user WHERE online='0'");
           while ($row=mysqli_fetch_assoc($get_on)){
           ?>
            <a href="" class="contact-list-link">
              <div class="d-flex">
                  
                <div class="pos-relative">
                  <img src="https://inopakinstitute.or.id/wp-content/uploads/2021/05/user-default.jpg" alt="">
                  <div class="contact-status-indicator bg-gray-500"></div>
                </div>
                <div class="contact-person">
                
                  <p><?php echo $row['nama'] ?></p>
                  <?php
                  $id_kota=$_SESSION['id_kota'];
                  $q=mysqli_query($koneksi, "SELECT * FROM tb_kota WHERE id_kota='$id_kota'");
                  $data = mysqli_fetch_assoc($q)
                  ?>
                  <span><?php echo $data['nama_kota'] ?></span>
                </div>
              </div><!-- d-flex -->
            </a><!-- contact-list-link -->
            <?php }?>