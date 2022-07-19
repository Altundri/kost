<?php
    session_start();
    include 'koneksi.php';
?>
<?php

 $query = mysqli_query($conn, "SELECT max(id_transaksi) FROM transaksi");  
 $hasil= mysqli_fetch_array($query);
 $urut = $hasil[0] + 1;

 if($urut == null){
    $urut = 1;
 }
 else{
    $tambah = (int) $urut + 1;
 }
 

 
 if(strlen($tambah) == 1){
     $format = 'INV-0000'.$tambah.'';
}else if(strlen($tambah) == 2){
     $format = 'INV-000'.$tambah.'';
}else{
    $ex = explode('INV-00',$_POST['kamar']);
    $no = (int) $ex[1] + 1;
    $format = 'INV-00'.$no.'';
}
	if (isset($_POST['submit'])) {
    

   
    $kamar=$_POST['kamar'];
    $jenis=$_POST['Jenis'];
    $harga=$_POST['biaya'];
    $stok=$_POST['stok'];
    $nama=$_POST['nama'];
    $telpon=$_POST['nohp'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $jml_tamu=$_POST['jml_tamu'];
    $lama_menginap=$_POST['lama_menginap'];
    $pesan=$_POST['pesan'];
    $tgl_masuk=$_POST['checkin'];
    $tgl_keluar=$_POST['checkout'];
    $id_pelanggan =$_SESSION['id_pelanggan'];
    $no_faktur = $format;

    
    $totalstok = $stok - $jml_tamu;
    // echo var_dump($totalstok);
    // die();
    // $query = "SELECT * FROM pelanggan";
    // $result = mysqli_query($conn,$query);
    $sql = mysqli_query($conn, "INSERT INTO transaksi (id_transaksi,No_Faktur,No_Kamar,Jenis,id_pelanggan,tgl_masuk,tgl_keluar,jml_kamar,lama_menginap,harga,Nama,Telpon,alamat,Email,pesan)
    VALUES ('$urut','$no_faktur','$kamar','$jenis','$id_pelanggan','$tgl_masuk','$tgl_keluar','$jml_tamu','$lama_menginap','$harga','$nama','$telpon','$alamat','$email','$pesan')");
    
    $sql2 = mysqli_query($conn, "UPDATE kamar SET stok = $totalstok WHERE No_Kamar=$kamar" );

    
    if($sql){
        echo "<script>
    alert('Pemesanan Kamar sukses!');
    window.location.href='index.php?page=reservasi';
    </script>";
    }else {
        echo "<script>
    alert('Pemesanan Kamar gagal! Kesalahan Database!');
    window.location.href='index.php?page=reservasi';
    </script>";
    }
}
