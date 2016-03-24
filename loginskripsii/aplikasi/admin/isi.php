<?php
error_reporting(0);
session_start();
if(empty($_SESSION['username'])){
  header("location:/loginskripsii/index.php");
 }
?>

<br>
<a href="../logout.php">Logout</a>
