<?php
error_reporting(0);
session_start();
if(empty($_SESSION['username'])){
  header("location:index.php");
 }
if (isset($_SESSION['level']))
{

   if ($_SESSION['level'] == "admin")
   {
      echo "<h1>Konten Untuk User</h1>";
   }
   else if ($_SESSION['level'] == "user")
   {
       echo "selamat datang ".$_SESSION['username'];
       //header("location:mengarahkankehalamanuser.php");
   }
}
?>
<br>
<a href="logout.php">Logout</a>
