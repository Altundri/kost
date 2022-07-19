<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "UPDATE konfirmasi SET status='Y' WHERE id_konfirmasi='$_GET[id_konfirmasi]'");
  
  if($sqlb){
    echo "<script>alert('Data Berhasil Di Konfirmasi');
    window.location.href ='admin.php?module=konfirmasi';</script>";
  }else{
    echo "<script>alert('Data Gagal Di Konfirmasi');
    window.location.href ='admin.php?module=konfirmasi';</script>";
  }
?>