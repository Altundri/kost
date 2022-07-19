<script src="https://kit.fontawesome.com/dc1e769554.js" crossorigin="anonymous"></script>
<h2>Tabel Tamu</h2>
<div class="alert alert-info">TABEL DATA TAMU</div>
<table width="100%" border="1" class="table table-bordered table-striped">

<tr> 
<th>No</th>
<th>Id Tamu</th>
<th>Nomor Faktur</th>
<th>Nama</th>
<th>No Telepon</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>Email</th>
<th>Aksi</th>
</tr>


<?php  
include "koneksi.php";
$sql = mysqli_query($con,"SELECT DISTINCT pelanggan.jk , transaksi.id_pelanggan , transaksi.No_Faktur, transaksi.Nama, transaksi.Telpon, transaksi.alamat, transaksi.Email, konfirmasi.status  FROM pelanggan INNER JOIN transaksi ON pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN konfirmasi ON transaksi.id_transaksi = konfirmasi.id_transaksi WHERE konfirmasi.status= 'Y' ");
$no=1;
while($row=mysqli_fetch_array($sql)){

?>

<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['id_pelanggan'] ?> </td>
<td align="center"><?php echo $row['No_Faktur'] ?> </td>
<td align="center"><?php echo $row['Nama'] ?> </td>
<td align="center"><?php echo $row['Telpon'] ?> </td>
<td align="center"><?php echo $row['jk'] ?> </td>
<td align="center"><?php echo $row['alamat'] ?> </td>
<td align="center"><?php echo $row['Email'] ?> </td>



<td align="center">
<a href="admin.php?module=hapustamu&id_pelanggan=<?php echo $row['id_pelanggan'];?>"class="btn btn-danger" onclick="return confirm('Apa Anda Yakin Ingin Menghapus Data?')"><i class="fa-solid fa-trash-can"></i></a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 