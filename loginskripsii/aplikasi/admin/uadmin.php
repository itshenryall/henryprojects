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
<html>
<head>
<title>ADMIN</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='../img/icon.jpg'></link>
</head>
<body>
<div id="container">

<div class="header">
<?php include "header.php"; ?>
</div>
<br>
<br>
<br>
<div class="conten">

<?php
include "../../config.php";
$no=$_GET['id'];
$query=mysql_query("select * from user where id='$no'");
?>
<form action="../aksi/suadmin.php" method="post">
<table border="1" align="center">
<?php
while($row=mysql_fetch_array($query)){
?>
<input type="hidden" name="id" value="<?php echo $no;?>"/>
<tr>
<td>Nama</td><td><input type="text" name="a1" value="<?php echo $row['username'];?>" /></td>
</tr>
<tr>
<td>Password</td><td><input type="text" name="a2" value="<?php echo $row['password'];?>" /></td>
</tr>
<tr>
<td><input type="submit" value="UPDATE" name="simpan" /></td>
</tr>
</table>
</form>
<?php
}
?>
</div>

<div class="footer">
<?php include "footer.php"; ?>
</div>


</div>


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