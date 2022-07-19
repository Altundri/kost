<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "delete from kamar where No_Kamar='$_GET[No_Kamar]'");
  
  if($sqlb){
    echo "<script>alert('Data Berhasil Di hapus');
    window.location.href ='admin.php?module=tabelkamar';</script>";
  }else{
    echo "<script>alert('Data Gagal Di hapus');
    window.location.href ='admin.php?module=tabelkamar';</script>";
  }
?>