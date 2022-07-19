<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "DELETE from tamu WHERE id_pelanggan='$_GET[id_pelanggan]'");
  
  if($sqlb){
    echo "<script>alert('Data Berhasil Di hapus');
    window.location.href ='admin.php?module=tabeltamu';</script>";
  }else{
    echo "<script>alert('Data Gagal Di hapus');
    window.location.href ='admin.php?module=tabeltamu';</script>";
  }
?>