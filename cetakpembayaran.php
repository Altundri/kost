<?php 
session_start();
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
	<h3><label>RD Kost Palembang </label></h3>
	<label>Jl. Rimba Kemuning Km.5 Sosial Palembang, Sumatera Selatan</label> 
	<label>Telepon : 081377801249 </label> 

	<div align="center">Cetak Bukti Pembayaran
</div>
	</td>
	</tr>
</table>
</div>
<table width="100%" border="1" class="table table-bordered table-striped">

		<tr> 
			<th>No</th>
			<th>id konfirmasi</th>
			<th>id pelanggan</th>
			<th>bank</th>
			<th>Jumlah Transfer</th>
		</tr>

<?php 
include 'koneksi.php';
$sql= mysqli_query($conn,"select * from konfirmasi where id_konfirmasi='$_GET[id_konfirmasi]' and status='Y'");
$no=1;
while($data=mysqli_fetch_array($sql)){

?>

		<tr>
			<td align="center"><?php echo $no; ?></td>
			<td align="center"><?php echo $data['id_konfirmasi'] ?> </td>
			<td align="center"><?php echo $data['id_pelanggan'] ?> </td>
			<td align="center"><?php echo $data['bank'] ?> </td>
			<td align="center"><?php echo $data['jumlah_transfer'] ?> </td>
		</tr>

<?php 
$no++;
}
?>
</table> 
 
 <td width="37%" bgcolor="#FFFFFF">
 <div align="right"> <?php $tanggal= date('d M Y');
 echo " $tanggal";?><br/>
 Admin
 <br></br>
 <br></br>
 (Minarni)
 </br>
 </td>
 </tr>
 </div>
