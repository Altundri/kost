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
                <td> <input type="text" class="form-control" name="No_Faktur" id=""> </td>
            </tr>
			 <tr style="color: black;">
                <td>No Kamar</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="No_Kamar" id=""></td>
				</tr>
				<tr style="color: black;">
                <td>No Id</td>
                <td>:</td>
                <td><input type="text" class="form-control"  name="id_pelanggan" id=""></td>
				</tr>
			<tr style="color: black;">
                <td>Tanggal Masuk</td>
                <td>:</td>
                <td><input type="date" class="form-control" name="tgl_masuk" id=""></td>
				</tr>
			<tr style="color: black;">
                <td>Tanggal Keluar</td>
                <td>:</td>
                <td><input type="date" class="form-control" name="tgl_keluar" id=""></td>
				</tr>
			<tr style="color: black;">
                <td>Lama Menginap</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="lama_menginap" id=""></td>
				</tr>
			<tr style="color: black;">
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="harga" id=""></td>
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

        $q = mysqli_query($con, "INSERT INTO transaksi(No_Faktur,No_Kamar,id_pelanggan,tgl_masuk,tgl_keluar,lama_menginap,harga) VALUES('$No_Faktur','$No_Kamar','$id_pelanggan','$tgl_masuk','$tgl_keluar','$lama_menginap','$harga')");
		
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