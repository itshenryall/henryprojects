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

<div class="conten">
<?php
include "../config.php";

$sql = mysql_query("SELECT * FROM bobot");
	//Buat tabel untuk menampilkan hasil
	echo "<center><H3>Bobot</H3></center>
	<table border='1' align='center'>
		<tr>
		<td>Kriteria</td>
		<td align='center'>Kehadiran</td>
		<td align='center'>Cara Mengajar</td>
		<td align='center'>Prestasi</td>
		<td align='center'>Penguasaan Materi</td>
		<td align='center'>Loyalitas</td>
		<td align='center'>Prilaku</td>
		<td align='center'>Aksi</td>
		</tr>
		";
	while ($dt = mysql_fetch_array($sql)) {
	?>
		<tr>
			<td><?php echo 'Bobot'?></td>
			<td align='center'><?php echo $dt['b1'];?></td>
			<td align='center'><?php echo $dt['b2'];?></td>
			<td align='center'><?php echo $dt['b3'];?></td>
			<td align='center'><?php echo $dt['b4'];?></td>
			<td align='center'><?php echo $dt['b5'];?></td>
			<td align='center'><?php echo $dt['b6'];?></td>
			<td align='center' width='80'><a href="ubobot.php?id=<?php echo $dt['id']; ?>">Edit</a>
		</tr>
	<?php
	}
	echo "</table>";
	echo "<br>";
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