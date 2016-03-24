<?php
error_reporting(0);
session_start();
if(empty($_SESSION['username'])){
  header("location:/loginskripsii/login.php");
 }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Nilai</title>
 
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap.min.css">
 
  </head>
  <body>
     
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../user/homeuser.php">Halaman User</a>
    </div>
 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master Data <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../user/data_alternatif.php">Data Bidang Keahlian</a></li>
            <li class="divider"></li>
            <li><a href="../user/data_nilai.php">Data Nilai Kriteria</a></li>
            <li class="divider"></li>
            <li><a href="../user/perhitungan.php">Perhitungan Nilai</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tambah Data <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../user/tambah_nilai.php">Nilai Kriteria</a></li>
          </ul>
        </li>
        <!-- <li class="dropdown"> -->
          <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Edit Data <span class="caret"></span></a> -->
          <!-- <ul class="dropdown-menu" role="menu"> -->
            <!-- <li><a href="data_kribot.php">Edit Kriteria dan Bobot</a></li> -->
          <!-- </ul> -->
        <!-- </li> -->
        <li><a href="../user/hasil.php">Hasil Nilai Akhir</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo 'Selamat datang ', $_SESSION['username'] , ' ! ';?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../user/data_user.php">Ubah Username / Password</a></li>
            <li class="divider"></li>
            <li><a href="../../logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<p>
 
 
</p>
  </div>
</div>
</div>

 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap.min.js"></script>
  </body>
</html>

<!-- perhitungan/<?php echo $_SESSION['username'],'.php ';?>-->