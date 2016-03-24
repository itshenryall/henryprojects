<?php
// memulai session
error_reporting(0);
session_start();
if (isset($_SESSION['level']))
{
  // jika level admin
  if ($_SESSION['level'] == "admin")
   {   


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navbar</title>
 
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
      <a class="navbar-brand" href="home.php">Halaman Admin</a>
    </div>
 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master Data <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="data_alternatif.php">Data Bidang Keahlian</a></li>
            <li class="divider"></li>
            <li><a href="data_kribot.php">Edit Data Bobot & Kriteria</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tambah Data <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="tambah_alternatif.php">Data Bidang Keahlian</a></li>
         
            <li class="divider"></li>
            <li><a href="tambah_user.php">Data Pengguna</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ubah Data <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="ehome.php">Edit Data Index</a></li>
            <li class="divider"></li>
            <li><a href="eketerangan.php">Edit Data Keterangan</a></li>
          </ul>
        </li>
        <li><a href="hasil.php">Hasil Nilai User</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo 'Selamat datang ', $_SESSION['username'] , ' ! ';?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="admin.php">Ubah Username / Password</a></li>
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

<?php
   }
   else if ($_SESSION['level'] == "user")
   {
       header('location:../user/homeuser.php');
   }
   else
{
  ?><script language="javascript">
  alert("Halaman Admin, Silahkan LOGIN");
  document.location="../../login.php";
  </script>
  <?php
}
}  
if (!isset($_SESSION['level']))
{
  header('location:../../login.php');
}
?>