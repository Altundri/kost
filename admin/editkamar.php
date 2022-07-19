<?php 
include 'koneksi.php';
$id=$_GET['No_Kamar'];
$sql= mysqli_query($con,"select * from kamar where No_Kamar='$id'");
$data=mysqli_fetch_array($sql);
?>
<html lang="en">

<head>
    <title>Form Entri Kamar</title>                        
</head>

<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
           
                
            <input type="hidden" name="No_Kamar" id="" value="<?php echo $data['No_Kamar']?>"> 

			<tr style="color: black;">
                <td>Jenis Kamar</td>
                <td>:</td>
                <td> <input type="text" name="Jenis" id="" class="form-control" value="<?php echo $data['Jenis']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Type</td>
                <td>:</td>
                <td> <input type="text" name="Type" id="" class="form-control" value="<?php echo $data['Type']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Harga</td>
                <td>:</td>
                <td> <input type="text" name="harga" id="" class="form-control" value="<?php echo number_format($data['harga'])?>"> </td>
            </tr>
            <tr style="color: black;">
                <td>Stok Kamar</td>
                <td>:</td>
                <td> <input type="text" name="stok" id="" class="form-control" value="<?php echo $data['stok']?>"> </td>
            </tr>
                <td></td>
                <td></td>
                <td> 
				<input type="submit" name="submit" id="" value="SIMPAN" class="btn btn-success">
				
				</td>
            </tr>
        </form>
    </table>

    <?php
    include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $No_Kamar = $_POST['No_Kamar'];
        $Jenis = $_POST['Jenis'];
        $Type= $_POST['Type'];
        $harga= $_POST['harga'];
        $stok= $_POST['stok'];

        $q = mysqli_query($con, "UPDATE kamar set Jenis='$Jenis', Type='$Type',harga='$harga',stok='$stok' where No_Kamar='$No_Kamar'");
	
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href ='admin.php?module=tabelkamar';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href= 'admin.php?module=tabelkamar';</script>";
        }
    }

    ?>

</body>

</html>