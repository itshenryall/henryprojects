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
<br>
<br>
<br>
<div class="conten">

<?php
include "../../config.php";
$no=$_GET['id_kriteria'];
$query=mysql_query("select * from kriteria where id_kriteria='$no'");
?>
<form action="../aksi/sukriteria.php" method="post">
<table border="1" align="center">
<?php
while($row=mysql_fetch_array($query)){
?>
<input type="hidden" name="id_kriteria" value="<?php echo $no;?>"/>
		<tr>
		<td>Kriteria</td>
		<td align='center'>C1</td>
		<td align='center'>C2</td>
		<td align='center'>C3</td>
		<td align='center'>C4</td>
		<td align='center'>C5</td>
		<td align='center'>C6</td>
		</tr>
		<td>Kriteria</td>
		<td align='center'><input type="text" name="a1" size="5" value="<?php echo $row['c1'];?>" /></td>
		<td align='center'><input type="text" name="a2" size="5" value="<?php echo $row['c2'];?>" /></td>
		<td align='center'><input type="text" name="a3" size="5" value="<?php echo $row['c3'];?>" /></td>
		<td align='center'><input type="text" name="a4" size="5" value="<?php echo $row['c4'];?>" /></td>
		<td align='center'><input type="text" name="a5" size="5" value="<?php echo $row['c5'];?>" /></td>
		<td align='center'><input type="text" name="a6" size="5" value="<?php echo $row['c6'];?>" /></td>
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