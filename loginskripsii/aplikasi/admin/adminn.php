<?php
error_reporting(0);
session_start();
if(empty($_SESSION['username'])){
  header("location:/loginskripsii/index.php");
 }
if (isset($_SESSION['level']))
{

   if ($_SESSION['level'] == "admin")
   {
      header("location:home.php");
   }
   else if ($_SESSION['level'] == "user")
   {
       //echo "selamat datang ".$_SESSION['username'];
       header("location:../user/homeuser.php");
   }
}
?>
<br>
<a href="../logout.php">Logout</a>
