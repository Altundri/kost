<head>
<script src="https://kit.fontawesome.com/dc1e769554.js" crossorigin="anonymous"></script>
</head>
<h2>Tabel Kamar</h2>
<div class="alert alert-info">TABEL DATA KAMAR</div>
<A href="admin.php?module=inputkamar" class="btn btn-primary">Tambah Data</a> <br> <br>
<table width="100%" border="1" class="table table-bordered table-striped">

<tr> 
<th>No</th>
<th>No Kamar</th>
<th>Jenis</th>
<th>Tipe Ranjang</th>
<th>Harga</th>
<th>Stok Kamar</th>
<th>Aksi</th>
</tr>


<?php  
include "koneksi.php";
$sql = mysqli_query($con,"select * from kamar");
$no=1;
while($row=mysqli_fetch_array($sql)){

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
<td align="center"><?php echo $hasil.$row['No_Kamar'] ?> </td>
<td align="center"><?php echo $row['Jenis'] ?> </td>
<td align="center"><?php echo $row['Type'] ?> </td>
<td align="center">Rp.<?php echo number_format($row['harga']) ?> </td>
<td align="center"><?php echo $row['stok'] ?> </td>


<td align="center">
<a href="admin.php?module=editkamar&No_Kamar=<?php echo $row['No_Kamar'];?>"class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
<a href="admin.php?module=hapuskamar&No_Kamar=<?php echo $row['No_Kamar'];?>"class="btn btn-danger" onclick="return confirm('Apa Anda Yakin Ingin Menghapus Data?')"><i class="fa-solid fa-trash-can"></i></a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 