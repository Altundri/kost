<html lang="en">

<head>
    <title>Form Entri Kamar</title>                        
</head>

<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr style="color: black;">
                <td>No.Kamar</td>
                <td>:</td>
                <td> <input type="text" name="No_Kamar" class="form-control" id=""> </td>
            </tr>
			<tr style="color: black;">
                <td>Jenis Kamar</td>
                <td>:</td>
                <td> <input type="text" name="Jenis" class="form-control" id=""> </td>
            </tr>
			<tr style="color: black;">
                <td>Tipe Kamar</td>
                <td>:</td>
                <td> <input type="text" name="Type" class="form-control" id=""> </td>
            </tr>
			<tr style="color: black;">
                <td>Harga</td>
                <td>:</td>
                <td> <input type="text" name="harga" class="form-control" id=""> </td>
            </tr>
            <tr style="color: black;">
                <td>Stok Kamar</td>
                <td>:</td>
                <td> <input type="text" name="stok" class="form-control" id=""> </td>
            </tr>
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
        $No_Kamar = $_POST['No_Kamar'];
        $Jenis = $_POST['Jenis'];
        $Type= $_POST['Type'];
        $harga= $_POST['harga'];
        $stok= $_POST['stok'];
        $q = mysqli_query($con, "INSERT INTO Kamar(No_Kamar,Jenis,Type,harga,stok) VALUES('$No_Kamar','$Jenis','$Type','$harga','$stok')");
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='admin.php?module=tabelkamar';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='admin.php?module=tabelkamar';</script>";
        }
    }

    ?>

</body>

</html>