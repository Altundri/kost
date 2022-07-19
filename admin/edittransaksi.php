<?php 
include 'koneksi.php';
$id=$_GET['No_Faktur'];
$sql= mysqli_query($con,"select * from transaksi where No_Faktur='$id'");
$data=mysqli_fetch_array($sql);
?>
<html lang="en">

<head>
    <title>Form Entri Transaksi</title>                        
</head>

<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr style="color: black;">
                <td>No Faktur</td>
                <td>:</td>
                <td> <input type="text" class="form-control" name="No_Faktur" id="" value="<?php echo $data['No_Faktur']?>"> </td>
            </tr>
			 <tr style="color: black;">
                <td>No Kamar</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="No_Kamar" id="" value="<?php echo $data['No_Kamar']?>"></td>
				</tr>
				<tr style="color: black;">
                <td>No Id</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="id_pelanggan" id="" value="<?php echo $data['id_pelanggan']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>Tanggal Masuk</td>
                <td>:</td>
                <td><input type="date" class="form-control" name="tgl_masuk" id="" value="<?php echo $data['tgl_masuk']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>Tanggal Keluar</td>
                <td>:</td>
                <td><input type="date" class="form-control" name="tgl_keluar" id="" value="<?php echo $data['tgl_keluar']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>Lama Menginap</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="lama_menginap" id="" value="<?php echo $data['lama_menginap']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="harga" id="" value="<?php echo number_format($data['harga'])?>"></td>
				</tr>
            <tr>
                <td></td>
                <td></td>
                <td> 
				<input type="submit" name="submit" id="" class="btn btn-success" value="SIMPAN">
				
				</td>
            </tr>
        </form>
    </table>

    <?php
    include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $No_Faktur = $_POST['No_Faktur'];
        $No_Kamar = $_POST['No_Kamar'];
        $id_pelanggan = $_POST['id_pelanggan'];
        $tgl_masuk = $_POST['tgl_masuk'];
        $tgl_keluar= $_POST['tgl_keluar'];
        $lama_menginap= $_POST['lama_menginap'];
        $harga= $_POST['harga'];

        $q = mysqli_query($con, "UPDATE transaksi set No_Faktur='$_POST[No_Faktur]',No_Kamar='$_POST[No_Kamar]',id_pelanggan='$_POST[id_pelanggan]',tgl_masuk='$_POST[tgl_masuk]',tgl_keluar='$_POST[tgl_keluar]',lama_menginap='$_POST[lama_menginap]',harga='$_POST[harga]' where No_Faktur='$_POST[No_Faktur]'");
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='admin.php?module=tabeltransaksi';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='admin.php?module=tabeltransaksi';</script>";
        }
    }

    ?>

</body>

</html>