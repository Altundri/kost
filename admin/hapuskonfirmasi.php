<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "delete from konfirmasi where id_konfirmasi='$_GET[id_konfirmasi]'");
  
  if($sqlb){
    echo "<script>alert('Data Berhasil Di hapus');
    window.location.href ='admin.php?module=konfirmasi';</script>";
  }else{
    echo "<script>alert('Data Gagal Di hapus');
    window.location.href ='admin.php?module=konfirmasi';</script>";
  }
?>