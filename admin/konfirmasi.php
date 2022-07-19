<script src="https://kit.fontawesome.com/dc1e769554.js" crossorigin="anonymous"></script>
<style type="text/css">

img.zoom {
    width: 150px;
    height: 150px;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    -ms-transition: all .2s ease-in-out;
}
 
.transisi {
    -webkit-transform: scale(3.8); 
    -moz-transform: scale(3.8);
    -o-transform: scale(3.8);
    transform: scale(3.8);
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transisi');
    }, function() {
        $(this).removeClass('transisi');
    });
});  
</script>
<h2>Tabel Konfirmasi Pembayaran</h2>
<div class="alert alert-info">TABEL DATA KONFIRMASI PEMBAYARAN</div>
<table width="100%" border="1" class="table table-bordered table-striped">

<tr> 
<th>No</th>
<th>Id Pembayaran</th>
<th>Id Transaksi</th>
<th>Id Pelanggan</th>
<th>Jumlah Transfer</th>
<th>Bank</th>
<th>Bukti Pembayaran</th>
<th>Status Pembayaran</th>

<th>Aksi</th>
</tr>


<?php  
include "koneksi.php";
$sql = mysqli_query($con,"select * from konfirmasi order by id_konfirmasi DESC");
$no=1;
$total=0;
while($row=mysqli_fetch_array($sql)){
?>

<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['id_konfirmasi'] ?> </td>
<td align="center"><?php echo $row['id_transaksi'] ?> </td>
<td align="center"><?php echo $row['id_pelanggan'] ?> </td>
<td align="center">Rp.<?php echo number_format($row['jumlah_transfer']) ?> </td>
<td align="center"><?php echo $row['bank'] ?> </td>
<td align="center"><img src="../images/<?php echo $row['gambar'] ?>" class="zoom" width="150px" height="150px"> </td>
<td align="center"><?php if ($row['status'] == 'Y'){
                        echo 'Sudah Di Konfirmasi'; 
                        }else {
                        echo 'Belum Di Konfirmasi';}
                        ?> </td>


<td align="center">
<a href="admin.php?module=editkonfirmasi&id_konfirmasi=<?php echo $row['id_konfirmasi'];?>"class="btn btn-success" onclick="return confirm('Apa Anda Yakin Ingin Mengkonfirmasi Data?')"><i class="fa-solid fa-check"></i></a>
<a href="admin.php?module=hapuskonfirmasi&id_konfirmasi=<?php echo $row['id_konfirmasi'];?>"class="btn btn-danger" onclick="return confirm('Apa Anda Yakin Ingin Menghapus Data?')"><i class="fa-solid fa-trash-can"></i></a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 

<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transisi');
    }, function() {
        $(this).removeClass('transisi');
    });
});  
</script>
