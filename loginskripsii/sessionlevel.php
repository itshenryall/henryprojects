<?php
// memulai session
error_reporting(0);
session_start();
if (isset($_SESSION['level']))
{
	// jika level admin
	if ($_SESSION['level'] == "admin")
   {   
   	header('location:aplikasi/admin/adminn.php');
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['level'] == "user")
   {
       header('location:aplikasi/user/session.php');
   }
}
if (!isset($_SESSION['level']))
{
  ?><script language="javascript">
      alert("Maaf, Anda harus mengisi semua field yang ada!!");
      document.location="login.php";
      </script><?php
	//header('location:../loginskripsii/index.php');
}

 ?>
 <br>
 <a href="logout.php">Logout</a>