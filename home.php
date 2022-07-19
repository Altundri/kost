<div class="slide-one-item home-slider owl-carousel">
  <?php
  $sql=mysqli_query($conn,"SELECT * FROM slider");
  foreach ($sql as $key => $value) {
  ?>
  <div class="site-blocks-cover overlay" style="background-image: url(images/<?= $value['gambar']; ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade">
          <h1 class="mb-2"><?= $value['deskripsi1'] ?></h1>
        </div>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
</div>
<div class="site-section block-15">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
        <h2>Kamar Tersedia</h2>
      </div>
    </div>
    <div class="nonloop-block-15 owl-carousel">
      
      <?php
      $sql=mysqli_query($conn,"SELECT galeri.*,kamar.* FROM galeri INNER JOIN kamar ON kamar.No_Kamar = galeri.No_Kamar");
      foreach ($sql as $value) {
      ?>
      <div class="media-with-text p-md-5">
        <div class="img-border-sm mb-4">
          
            <img src="images/<?= $value['gambar']; ?>" alt="" class="img-fluid">
        
        </div>
        <h2 class="heading mb-0"><a href="#"><?= $value['Jenis']; ?></a></h2>
        <strong class="price"><?= $value['deskripsi']; ?> </strong>
        <div class="harga">
        <p>Rp. <?= number_format($value['harga']); ?></p></div>
      
      </div>
      <?php
      }
      ?>
      
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
        <h2 class="mb-5">Galeri Lainnya</h2>
      </div>
    </div>
    <div class="row no-gutters">
      <?php
      $sql=mysqli_query($conn,"SELECT * FROM galeri2");
      foreach ($sql as $value) {
      ?>
      <div class="col-md-6 col-lg-3">
        <a href="images/<?= $value['gambar']; ?>" class="image-popup img-opacity"><img src="images/<?= $value['gambar']; ?>" alt="Image" class="img-fluid"></a>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>

</div>
</div>
