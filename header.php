<?php
  session_start();
 ?>

<div class="site-navbar-wrap js-site-navbar ">
  
  <div class="container">
    <div class="site-navbar bg-black">
      <div class="py-1">
        <div class="row align-items-center">
          <div class="col-2">
            <h2 class="mb-0 site-logo"><a href="index.php"><img src="images/RDLogo.png" width="150" height="75"></a></h2>
          </div>
          <div class="col-10">
            <nav class="site-navigation text-right" role="navigation">
              <div class="container">
                
                <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="<?php $aktif = ($_GET['page']=='home' || !isset($_GET['page'])) ? 'active' : ''; echo $aktif;  ?>">
                    <a href="index.php">Beranda</a>
                  </li>
                  
                  
                  <li class="has-children <?php $aktif = ($_GET['page']=='kamar') ? 'active' : ''; echo $aktif; ?>">
                    <a href="#">Room</a>
                    <ul class="dropdown arrow-top">
                    <?php
                    $sql=mysqli_query($conn,"SELECT kamar.Jenis FROM kamar");
                    foreach ($sql as $value) {
                      ?>
                      <li><a href="?page=kamar&jenis=<?= $value['Jenis']; ?>"><?= $value['Jenis']; ?></a></li>
                      <?php
                    }
                     ?>
                    </ul>
                  </li>
                    <li class="has-children <?php $aktif = ($_GET['page']=='reservasi') ? 'active' : ''; echo $aktif; ?>">
                        <a href="?page=reservasi">Pesan</a>
                        <ul class="dropdown arrow-top">
                          <li class="<?php $aktif = ($_GET['page']=='reservasi') ? 'active' : ''; echo $aktif; ?>"><a href="?page=reservasi">Pemesanan Kamar</a></li>
                          <li class="<?php $aktif = ($_GET['page']=='konfirmasi_pembayaran') ? 'active' : ''; echo $aktif; ?>"><a href="?page=konfirmasi_pembayaran">Konfirmasi Pembayaran</a></li>
                          <li class="<?php $aktif = ($_GET['page']=='cetak') ? 'active' : ''; echo $aktif; ?>"><a href="?page=cetak">Cetak Bukti Pembayaran</a></li>                          
                            </ul>
                          </li>
				    
			        
              <?php 
                  if (@$_SESSION["username"]==""){


             

              ?>
                          <li class="has-children <?php $aktif = ($_GET['page']=='kegiatan') ? 'active' : ''; echo $aktif; ?>">
                        <a href="#">Daftar/Login </a>
                        <ul class="dropdown arrow-top">
                          <li class="<?php $aktif = ($_GET['page']=='login') ? 'active' : ''; echo $aktif; ?>"><a href="?page=login">Login</a></li>
                          <li class="<?php $aktif = ($_GET['page']=='register') ? 'active' : ''; echo $aktif; ?>"><a href="?page=register">Daftar</a></li>                          
                            </ul>
                          </li>
                          <?php 
                            } else { ?>
                          <li><a href="logout.php">Logout</a></li>

                            <?php 


                            }

                          ?>
                    </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>