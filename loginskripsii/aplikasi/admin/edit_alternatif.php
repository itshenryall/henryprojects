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

<div class="header">
<?php include "header.php"; ?>
</div>

<div class="conten">

<?php
include "../../config.php";
$id_alternatif=$_GET['id_alternatif'];
$query=mysql_query("select * from alternatif where id_alternatif ='$id_alternatif'");
?>
<form action="../aksi/supdate_alternatif.php" method="post">
<table border="2" align="center">
<?php
while($row=mysql_fetch_array($query)){
?>
<input type="hidden" name="id_alternatif" value="<?php echo $id_alternatif;?>"/>
<tr>
<td>Nama</td><td><input type="text" name="a1" value="<?php echo $row['nama'];?>" /></td>
</tr>
<tr>
<td>Deskripsi</td><td><textarea cols="20" rows="5" name="a2"><?php echo $row['deskripsi'];?></textarea></td>
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