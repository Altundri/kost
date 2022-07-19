<?php
  if(@$_SESSION['id_pelanggan']!=""){
    $id = $_SESSION['id_pelanggan'];
?>
<?php
if (!isset($_GET['konf'])) {
  ?>
  <div class="site-blocks-cover overlay" style="background-image: url(images/IMG_6509.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade">
          <h1 class="mb-4">Pemesanan Kamar</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5">Pemesanan Kamar</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
          <form action="index.php?page=reservasi&konf=y" method="post" class="bg-white p-md-5 p-4 mb-5 border">
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="kamar">Pilih Jenis Kamar</label>
                <select required name="kamar" id="kamar" class="form-control" onChange="getgambar(this.value)">
                  <option value="">--Pilih Kamar--</option>
                  <?php
                  $sql = mysqli_query($conn, "SELECT * FROM kamar join pelanggan where id_pelanggan = '$id'");
                  foreach ($sql as $value) {
                    ?>
                    <option value="<?= $value['No_Kamar']; ?>"><?= $value['Jenis']; ?></option>
                  <?php
                }
                ?>
                </select>
              </div>
            </div>
            <div id="dvkecamatan">
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="gambar">Gambar</label>
                  <!-- <input type="text" id="name" class="form-control "> -->

                  <img src="images/" alt="Gambar tidak di temukan" name="kecamatan" id="kecamatan">

                </div>
              </div>
              
                
            </div>
            
            <div class="row">
            <input  type="hidden" id="id_transaksi" value ="<?php $query['id_transaksi']; ?>" name="id_transaksi"  />
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="nama">Nama</label>
                <input required type="text" id="nama" name="nama" class="form-control" readonly value="<?php echo $value['nama']; ?>" />
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="phone">Telepon</label>
                <input required type="text" id="phone" name="nohp" class="form-control " readonly value="<?php echo $value['no_hp']; ?>" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="email">Email</label>
                <input required type="email" id="email" name="email" class="form-control " readonly value="<?php echo $value['email']; ?>" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="alamat">Alamat</label>
                <input required type="alamat" id="alamat" name="alamat" class="form-control " readonly value="<?php echo $value['alamat']; ?>" />
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="checkin_date">Tanggal Check In</label>
                <input required type="date" id="checkin_date" name="checkin" class="form-control">
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="checkout_date">Tanggal Check Out</label>
                <input required type="date" id="checkout_date" name="checkout" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="adults" class="font-weight-bold text-black">Jumlah Kamar</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="jml_tamu" id="adults" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4+</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="message">Catatan Tambahan</label>
                <textarea name="pesan" id="message" class="form-control " cols="30" rows="8"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Cek" name="submit" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
          <div class="row">
            <div class="col-md-10 ml-auto contact-info">
              <p><span style="font-size: 30px;" class="d-block"><strong>ALAMAT</strong>:</span> <span style="font-size: 35px;" class="text-black"> Jl. Rimba Kemuning Km.5 Sosial Palembang, Sumatera Selatan</span></p>
              <p><span style="font-size: 30px;" class="d-block"><strong>BANK MANDIRI</strong>:</span> <span style="font-size: 35px;" class="text-black"> 112-00-0632379-9 a/n Linda Sari</span></p>
              <p><span style="font-size: 30px;" class="d-block"><strong>TELEPON</strong>:</span> <span style="font-size: 35px;" class="text-black"> 081377801249 </span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  -->
<?php
} elseif (isset($_GET['konf'])) {
  $id_transaksi = $_POST['id_transaksi'];
  $kamar=$_POST['kamar'];
  $jenis=$_POST['Jenis'];
  $harga=substr($_POST['harga'],3);
  $stok=($_POST['stok']);
  $nama=$_POST['nama'];
  $telpon=$_POST['nohp'];
  $email=$_POST['email'];
  $alamat=$_POST['alamat'];
  $cek_in=$_POST['checkin'];
  $cek_out=$_POST['checkout'];
  $jml_tamu=$_POST['jml_tamu'];
  $pesan=$_POST['pesan'];
  $waktu1=strtotime($_POST['checkin']);
  $waktu2=strtotime($_POST['checkout']);
  $secs = $waktu2 - $waktu1;
  $today = date('Y-m-d');
  $lama_menginap = $secs / 86400;
  $tot=$lama_menginap*$harga*$jml_tamu;
  if ($lama_menginap <= 0) {
    echo "<script>
    alert('Data tidak Valid!');
    window.location.href='index.php?page=reservasi';
    </script>";
  }elseif ($cek_in < $today) {
    echo "<script>
    alert('Tidak bisa memesan kamar pada tanggal yang sudah lewat!');
    window.location.href='index.php?page=reservasi';
    </script>";
  }elseif ($stok <= 0) {
      echo "<script>
      alert('Kamar Tidak Tersedia!');
      window.location.href='index.php?page=reservasi';
      </script>";
  }elseif ($jml_tamu > $stok) {
    echo "<script>
    alert('Kamar Hanya Tersisa $stok!');
    window.location.href='index.php?page=reservasi';
    </script>";
}
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
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2 class="mb-5">Konfirmasi Pemesanan Kamar</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
          <form action="proses_reservasi.php" method="post" class="bg-white p-md-5 p-4 mb-5 border">
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="nkamar">Nomor Kamar</label>
                <?php  if ($jenis == "Suite Room"){
                  $hasil = "S";
                }else if ($jenis == "VIP Room"){
                  $hasil = "V";
                }
                
                ?>
                <input type="hidden" name="kamar" id="kamar" class="form-control" value="<?= $kamar; ?>"  readonly>
                <input type="text" name="nkamar" id="nkamar" class="form-control" value="<?= $hasil.$kamar; ?>"  readonly>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="Jenis">Jenis Kamar</label>
                <input type="text" name="Jenis" id="Jenis" class="form-control" value="<?= $jenis; ?>" readonly>
              </div>
            </div>
            <div id="dvkecamatan">
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="harga">Harga</label>
                  <input type="text" name="harga" value="Rp.<?=$harga?>/malam/tamu" readonly id="harga" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="hidden" name="stok" value="<?= $stok ?>" readonly id="stok" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="nama">Nama</label>
                <input type="text" id="nama" name="nama" value="<?= $nama; ?>" readonly class="form-control ">
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="phone">Telepon</label>
                <input type="text" id="phone" name="nohp" value="<?= $telpon; ?>" readonly class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="email">Email</label>
                <input type="text" id="email" name="email" value="<?= $email; ?>" readonly class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" value="<?= $alamat; ?>" readonly class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="checkin_date">Tanggal Check In</label>
                <input type="date" id="checkin_date" value="<?= $cek_in; ?>" readonly name="checkin" class="form-control">
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="checkout_date">Tanggal Check Out</label>
                <input type="date" id="checkout_date" value="<?= $cek_out; ?>" readonly name="checkout" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="adults" class="font-weight-bold text-black">Jumlah Kamar</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <input type="text" name="jml_tamu" id="" value="<?= $jml_tamu; ?>" readonly class="form-control ">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="adults" class="font-weight-bold text-black">Total Biaya</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <input type="hidden" name="biaya" id="" value="<?= $tot ?>" readonly class="form-control ">
                  <input type="text" name="biayar" id="" value="Rp.<?= number_format($tot) ?>" readonly class="form-control ">
                </div>
                <input type="hidden" name="lama_menginap" value="<?= $lama_menginap; ?>" name="" id="">
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="message">Catatan Tambahan</label>
                <textarea name="pesan" id="message" class="form-control " readonly cols="30" rows="8"><?= $pesan ?></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Pesan Sekarang!" name="submit" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
          <div class="row">
            <div class="col-md-10 ml-auto contact-info">
              <p><span style="font-size: 30px;" class="d-block"><strong>ALAMAT</strong>:</span> <span style="font-size: 35px;" class="text-black"> Jl. Rimba Kemuning Km.5 Sosial Palembang, Sumatera Selatan</span></p>
              <p><span style="font-size: 30px;" class="d-block"><strong>BANK MANDIRI</strong>:</span> <span style="font-size: 35px;" class="text-black"> 112-00-0632379-9 a/n Linda Sari</span></p>
              <p><span style="font-size: 30px;" class="d-block"><strong>TELEPON</strong>:</span> <span style="font-size: 35px;" class="text-black"> 081377801249 </span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  -->
<?php
}
}else{
     echo "<script>alert('Silahkan Login Terlebih Dahulu atau registrasi terlebih dahulu!');
           window.location='index.php?page=login';</script>";
}
