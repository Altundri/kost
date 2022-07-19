<?php 
session_start();
include 'koneksi.php';
if($_SESSION['username']==""){
header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMINISTRATION</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/animate.css">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
        
        
        
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
        
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
<div class="container" >

      <!-- Static navbar -->
      <div class="navbar navbar-inverse"style="background : #F0E68C	;" role="navigation">
        <div class="container-fluid">
            <!--header saat mobile version-->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SISTEM PEMESANAN</a>
          </div><!--end header saat mobile version-->

          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li ><a href="admin.php?module=home">BERANDA</a></li>
              <li><a href="admin.php?module=tabelkamar">DATA KAMAR</a></li>
              <li><a href="admin.php?module=tabeltamu">DATA TAMU</a></li>
              <li><a href="admin.php?module=tabeltransaksi">DATA TRANSAKSI</a></li>
               <li><a href="admin.php?module=konfirmasi">KONFIRMASI PEMBAYARAN</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">LAPORAN<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="admin.php?module=laporanperhari">LAPORAN PERHARI</a></li>
                  <li><a href="admin.php?module=laporanperbulan">LAPORAN PERBULAN</a></li>
                  <li><a href="admin.php?module=laporanpertahun">LAPORAN PERTAHUN</a></li>
                </ul>
              </li>
              <li><a href="admin.php?module=logout">LOGOUT</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
<?php
include "content.php";
?>


    </div> <!-- /container -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>