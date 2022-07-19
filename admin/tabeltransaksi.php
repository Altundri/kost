<script src="https://kit.fontawesome.com/dc1e769554.js" crossorigin="anonymous"></script>
<h2>Tabel Transaksi</h2>
<div class="alert alert-info">TABEL DATA TRANSAKSI</div>
<table width="100%" border="1" class="table table-bordered table-striped">
<tr>
<form method="POST" action="">
<td>Pilih Tanggal</td><td><input type="date" class="form-control" name="hari_ini"></td>
<td><button type="submit" name="cari" class="form-control" style="background-color: #1E90FF; color:white;">Cari</td>
</tr>
</form>

<tr> 
<th>No</th>
<th>No Faktur</th>
<th>No Kamar</th>
<th>ID Tamu</th>
<th>Tanggal Masuk</th>
<th>Tanggal Keluar</th>
<th>Jumlah Kamar</th>
<th>Lama Menginap</th>
<th>Harga</th>
<th>Aksi</th>

</tr>

<?php  
include "koneksi.php";
 if (isset($_POST['cari'])){
  $hari_ini=$_POST['hari_ini'];
  $sql= mysqli_query($con, "select * from transaksi where transaksi.tgl_masuk='$hari_ini'");
  }else{
$sql = mysqli_query($con,"select * from transaksi");
}
$no=1;
$total=0;

     
while($row=mysqli_fetch_array($sql)){
$total=$row['lama_menginap'] * $row['harga'];
?><?php

if ($row['Jenis'] == "Suite Room"){
  $hasil = "S";
}else if ($row['Jenis'] == "VIP Room"){
  $hasil = "V";
}

?>
<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['No_Faktur'] ?> </td>
<td align="center"><?php echo $hasil.$row['No_Kamar'] ?> </td>
<td align="center"><?php echo $row['id_pelanggan'] ?> </td>
<td align="center"><?php echo $row['tgl_masuk'] ?> </td>
<td align="center"><?php echo $row['tgl_keluar'] ?> </td>
<td align="center"><?php echo $row['jml_kamar'] ?> Kamar</td>
<td align="center"><?php echo $row['lama_menginap'] ?> Hari </td>
<td align="center">Rp.<?php echo number_format($row['harga']) ?> </td>



<td align="center">
<a href="admin.php?module=edittransaksi&No_Faktur=<?php echo $row['No_Faktur'];?>"class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
<a href="admin.php?module=hapustransaksi&No_Faktur=<?php echo $row['No_Faktur'];?>"class="btn btn-danger" onclick="return confirm('Apa Anda Yakin Ingin Menghapus Data?')"><i class="fa-solid fa-trash-can"></i></a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 
