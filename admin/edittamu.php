<?php 
include 'koneksi.php';
$id=$_GET['id_pelanggan'];
$sql= mysqli_query($con,"SELECT * FROM pelanggan JOIN transaksi ON pelanggan.id_pelanggan = transaksi.id_pelanggan JOIN konfirmasi ON pelanggan.id_pelanggan = konfirmasi.id_pelanggan Where idkonfirmasi.status='Y' ");
$data=mysqli_fetch_array($sql);
?>

<html lang="en">

<head>
    <title>Form Entri Tamu</title>                        
</head>

<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr style="color: black;">
                <td>ID Tamu</td>
                <td>:</td>
                <td> <input type="text" name="id_pelanggan" id="" class="form-control" value="<?php echo $data['id_pelanggan']?>"> </td>
            </tr>
			 <tr style="color: black;">
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="Nama" id="" class="form-control" value="<?php echo $data['Nama']?>"></td>
				</tr>
            <tr style="color: black;">
                <td>Alamat</td>
                <td>:</td>
                <td> <input type="text" name="Alamat" class="form-control" id=""  value="<?php echo $data['Alamat']?>"></textarea> </td>
            </tr>
			<tr style="color: black;">
                <td>Asal</td>
                <td>:</td>
                <td><input type="text" name="Asal" class="form-control" id="" value="<?php echo $data['Asal']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>No Telpon</td>
                <td>:</td>
                <td> <input type="text" name="NoTlp" class="form-control" id="" value="<?php echo $data['NoTlp']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td> <input type="text" name="jk" class="form-control" id="" value="<?php echo $data['jk']?>"> </td>
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
        $id_pelanggan = $_POST['id_pelanggan'];
        $Nama = $_POST['Nama'];
        $Alamat= $_POST['Alamat'];
        $Asal= $_POST['Asal'];
        $NoTlp= $_POST['NoTlp'];
        $jk = $_POST['jk'];

        $q = mysqli_query($con, "UPDATE tamu set id_pelanggan='$_POST[id_pelanggan]',Nama='$_POST[Nama]',Alamat='$_POST[Alamat]',Asal='$_POST[Asal]',NoTlp='$_POST[NoTlp]',jk='$_POST[jk]' where id_pelanggan='$_POST[id_pelanggan]'");
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='admin.php?module=tabeltamu';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='admin.php?module=tabeltamu';</script>";
        }
    }

    ?>

</body>

</html>