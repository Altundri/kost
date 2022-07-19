<script src="https://kit.fontawesome.com/dc1e769554.js" crossorigin="anonymous"></script>
<?php
if (!isset($_GET['jenis'])) {
?>
<div class="site-blocks-cover overlay" style="background-image: url(images/IMG_6509.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-7 text-center" data-aos="fade">
				<h1 class="mb-4">Semua Kamar</h1>
			</div>
		</div>
	</div>
</div>
<div class="site-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mx-auto text-center mb-5 section-heading">
				<h2 class="mb-5">Kamar yang Tersedia</h2>
			</div>
		</div>
		<div class="row">
			<?php
			$sql=mysqli_query($conn,"SELECT galeri.*,kamar.* FROM galeri INNER JOIN kamar ON kamar.No_Kamar = galeri.No_Kamar");
			foreach ($sql as $value) {
			?>
			<div class="col-md-6 col-lg-4 mb-5" >
				<div class="hotel-room text-center" >
					<a href="#" class="d-block mb-0 thumbnail"><img src="images/<?= $value['gambar']; ?>" alt="Image" class="img-fluid" ></a>
					<div class="hotel-room-body"  >
						<h3 class="heading mb-0"><a href="#"><?= $value['Jenis']; ?></a></h3>
						<strong class="price">Rp. <?= number_format($value['harga']); ?> / per malam</strong></br>
							<strong class="price"><?= $value['deskripsi']; ?> </strong>
					</div>
				</div>
			</div>
			<?php
			}
			?>
		</div>
		<div class="row mt-5">
			<div class="col-md-12 text-center">
				<div class="site-block-27">
					<ul>
						<li><a href="#">&lt;</a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&gt;</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}else {
?>
<div class="site-blocks-cover overlay" style="background-image: url(images/IMG_6509.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-7 text-center" data-aos="fade">
				<h1 class="mb-4">Kamar dan Fasilitas</h1>
			</div>
		</div>
	</div>
</div>
<div class="site-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto text-center mb-5 section-heading">
				<h2 class="mb-5">Kamar yang Tersedia</h2>
			</div>
		</div>
		<div class="row">
			<?php
			$sql=mysqli_query($conn,"SELECT galeri.*,kamar.* FROM galeri INNER JOIN kamar ON kamar.No_Kamar = galeri.No_Kamar WHERE Jenis='$_GET[jenis]'");
			foreach ($sql as $value) {
			?>
			<div class="col-md-12 col-lg-12 mb-12">
				<div class="hotel-room text-center">
					<a href="images/<?= $value['gambar']; ?>" class="image-popup img-opacity"><img src="images/<?= $value['gambar']; ?>" alt="Image" class="img-fluid"></a>
					<div class="hotel-room-body">
						<h3 class="heading mb-0"><a href="#"><?= $value['Jenis']; ?></a></h3>
						<strong class="price">Rp. <?= number_format($value['harga']); ?> / per malam</strong></br>
								<strong class="price"><?= $value['deskripsi']; ?> </strong>
								<div class="site-section">
								<div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="text-center p-4 item">
          <span class="fa-solid fa-wifi display-3 mb-3 d-block text-primary"></span>
          <h2 class="h5">Wifi Gratis</h2>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="text-center p-4 item">
          <span class="fa-solid fa-bed display-3 mb-3 d-block text-primary"></span>
          <h2 class="h5">Tempat Tidur Queen Size</h2>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="text-center p-4 item">
          <span class="fa-regular fa-snowflake display-3 mb-3 d-block text-primary"></span>
          <h2 class="h5">AC</h2>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="text-center p-4 item">
          <span class="fa-solid fa-tv display-3 mb-3 d-block text-primary"></span>
          <h2 class="h5">TV</h2>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="text-center p-4 item">
          <span class="fa-solid fa-shower display-3 mb-3 d-block text-primary"></span>
          <h2 class="h5">Shower</h2>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="text-center p-4 item">
          <span class="fa-solid fa-credit-card display-3 mb-3 d-block text-primary"></span>
          <h2 class="h5">Pembayaran Kartu</h2>
        </div>
      </div>
    </div>
  </div>
</div>
					</div>
				</div>
				
			</div>
			<?php
			}
			?>
		</div>
	</div>
</div>
<?php
}