<?php
// memulai session
error_reporting(0);
session_start();
if (isset($_SESSION['level']))
{
	// jika level admin
	if ($_SESSION['level'] == "user")
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
<?php include "headeruser.php"; ?>
</div>
<br>
<br>
<br>
<div class="conten">

<?php
include "../../config.php";
$no=$_GET['id_bobot'];
$query=mysql_query("select * from bobot where id_bobot='$no'");
$sql2 = mysql_query("SELECT * FROM kriteria");
?>
<form action="../aksi/subobot.php" method="post">
<table border="1" align="center">
<?php
while ($dt2 = mysql_fetch_array($sql2)) {
while($row=mysql_fetch_array($query)){
?>
<input type="hidden" name="id_bobot" value="<?php echo $no;?>"/>
		<tr>
		<td>Kriteria</td>
		<td align='center'><?php echo $dt2['c1'];?></td>
		<td align='center'><?php echo $dt2['c2'];?></td>
		<td align='center'><?php echo $dt2['c3'];?></td>
		<td align='center'><?php echo $dt2['c4'];?></td>
		<td align='center'><?php echo $dt2['c5'];?></td>
		<td align='center'><?php echo $dt2['c6'];?></td>
		</tr>
		<td>Bobot</td>
		<td align='center'><input type="text" name="a1" size="5" value="<?php echo $row['b1'];?>" /></td>
		<td align='center'><input type="text" name="a2" size="5" value="<?php echo $row['b2'];?>" /></td>
		<td align='center'><input type="text" name="a3" size="5" value="<?php echo $row['b3'];?>" /></td>
		<td align='center'><input type="text" name="a4" size="5" value="<?php echo $row['b4'];?>" /></td>
		<td align='center'><input type="text" name="a5" size="5" value="<?php echo $row['b5'];?>" /></td>
		<td align='center'><input type="text" name="a6" size="5" value="<?php echo $row['b6'];?>" /></td>
		</tr>
<tr>
<td><input type="submit" value="UPDATE" name="simpan" /></td>
</tr>
</table>
</form>
<?php
}
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
   else if ($_SESSION['level'] == "admin")
   {
       header('location:../admin/home.php');
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