<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "delete from transaksi where No_Faktur='$_GET[No_Faktur]'");
  
  if($sqlb){
    echo "<script>alert('Data Berhasil Di hapus');
    window.location.href ='admin.php?module=tabeltransaksi';</script>";
  }else{
    echo "<script>alert('Data Gagal Di hapus');
    window.location.href ='admin.php?module=tabeltransaksi';</script>";
  }
?>