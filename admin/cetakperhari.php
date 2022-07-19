<?php 
include "koneksi.php" ;

?>
<body onLoad="javascript:print()"> 
<style type="text/css">
.style5 {font-size: 24px}
</style>

<div class="panel-heading">
    <table width="100%">
	<tr>
	<td><div align="center">
	<div align="center">Cetak Data Per-hari
</div>
	</td>
	</tr>
</table>
</div>
<table width="100%" border="1" class="table table-bordered table-striped">

<tr> 
<th style="text-align:center">No</th>
<th style="text-align:center">No Faktur</th>
<th style="text-align:center">No Kamar</th>
<th style="text-align:center">No ID</th>
<th style="text-align:center">Nama</th>
<th style="text-align:center">Tanggal Masuk</th>
<th style="text-align:center">Tanggal Keluar</th>
<th style="text-align:center">Jumlah Kamar</th>
<th style="text-align:center">Lama Menginap</th>
<th style="text-align:center">Harga</th>
</tr>


<?php  
include "koneksi.php";
$hari_ini = date("Y-m-d");
$sql = mysqli_query($con, "SELECT DISTINCT *  FROM pelanggan INNER JOIN transaksi ON pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN konfirmasi ON transaksi.id_transaksi = konfirmasi.id_transaksi WHERE konfirmasi.status='Y' && transaksi.tgl_masuk = date('$_GET[hari_ini]') ");

$no=1;
$total=0;
while($row=mysqli_fetch_array($sql)){
$total=$row['lama_menginap'] * $row['harga'];
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
<td align="center"><?php echo $row['Nama'] ?> </td>
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
<td align="center" colspan="9" > <strong>Total Pendapatan </strong></td>
<td style="background-color:#49be25" align="center"  > <strong>Rp.<?php echo number_format($total)?> </strong></td>
</table> 
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="FFFFFF">
<tr>
 <td width="63%" bgcolor="#FFFFFF">
 <p align ="right"></p><br/>
 </td></tr>

 
 <td width="37%" bgcolor="#FFFFFF">
 <div align="right"> <?php $tanggal= date('d M Y');
 echo " $tanggal";?><br/>
 Pemilik
 <br></br>
 <br></br>
 (Linda Sari)
 </br>
 </td>
 </tr>
 </div>