<script src="https://kit.fontawesome.com/dc1e769554.js" crossorigin="anonymous"></script>
<h2>LAPORAN PERTAHUN</h2>
<div class="alert alert-info">LAPORAN DATA PERTAHUN</div>
<?php
$thn_ini=date("Y");
?>
<table width="100%" border="1" class="table table-bordered table-striped">
<tr>
<form method="POST" action="">
<td>-Pilih Tanggal-</td><td><input type="year" class="form-control" name="thn_ini" value="<?php echo $thn_ini; ?>"></td>
<td><button type="submit" name="cari" class="form-control" style="background-color: #1E90FF; color:white;">Cari</td>
</tr>
</form>


<tr> 
<th style="text-align:center">No</th>
<th style="text-align:center">No Faktur</th>
<th style="text-align:center">No Kamar</th>
<th style="text-align:center">No ID</th>
<th style="text-align:center">Tanggal Masuk</th>
<th style="text-align:center">Tanggal Keluar</th>
<th style="text-align:center">Jumlah Kamar</th>
<th style="text-align:center">Lama Menginap</th>
<th style="text-align:center">Harga</th>
</tr>


<?php  
include "koneksi.php";
 if (isset($_POST['cari'])){
  $thn=$_POST['thn_ini'];
  $sql= mysqli_query($con, "SELECT DISTINCT *  FROM pelanggan INNER JOIN transaksi ON pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN konfirmasi ON transaksi.id_transaksi = konfirmasi.id_transaksi WHERE konfirmasi.status='Y' && transaksi.tgl_masuk LIKE '%$_POST[thn_ini]%' ");
  }else{
$sql = mysqli_query($con,"SELECT DISTINCT *  FROM pelanggan INNER JOIN transaksi ON pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN konfirmasi ON transaksi.id_transaksi = konfirmasi.id_transaksi WHERE konfirmasi.status= 'Y' ");
}
$no=1;
$total=0;
while($row=mysqli_fetch_array($sql)){
$total+= $row['harga'];
?>
<?php

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
<td align="center"><?php echo $row['lama_menginap'] ?> Hari</td>
<td align="center">Rp.<?php echo number_format($row['harga']) ?> </td>

</tr>

<?php 
$no++;
}
?>
<td align="center" colspan="8" > <strong>Total Pendapatan </strong></td>
<td style="background-color:#49be25" align="center"  > <strong>Rp.<?php echo number_format($total)?> </strong></td>
</table> 
<br>
<a href="admin.php?module=cetakpertahun&thn_ini=<?php echo $_POST['thn_ini'];?>"class="btn btn-success"><i class="fa-solid fa-print"></i> CETAK</a>
</br>