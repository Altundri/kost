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
                <td> <input type="text" name="id_pelanggan" id="" class="form-control" > </td>
            </tr>
			 <tr style="color: black;">
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="Nama" id="" class="form-control" ></td>
				</tr>
            <tr style="color: black;">
                <td>Alamat</td>
                <td>:</td>
                <td> <input type="text" name="Alamat" class="form-control" id=""  ></textarea> </td>
            </tr>
			<tr style="color: black;">
                <td>Asal</td>
                <td>:</td>
                <td><input type="text" name="Asal" class="form-control" id="" ></td>
				</tr>
			<tr style="color: black;">
                <td>No Telpon</td>
                <td>:</td>
                <td> <input type="text" name="NoTlp" class="form-control" id="" > </td>
            </tr>
			<tr style="color: black;">
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td> <input type="text" name="jk" class="form-control" id="" > </td>
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

        $q = mysqli_query($con, "INSERT INTO tamu(id_pelanggan,Nama,Alamat,Asal,NoTlp,jk) VALUES('$id_pelanggan','$Nama','$Alamat','$Asal','$NoTlp','$jk')");
		
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