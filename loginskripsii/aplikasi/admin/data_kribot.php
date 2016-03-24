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
<title>Pemilihan Bidang Keahlian</title>
<script language='JavaScript'>
  var txt=" SPK Pemilihan Bidang Keahlian |  ";
  var kecepatan=200;var segarkan=null;
  function bergerak() { document.title=txt;
    txt=txt.substring(1,txt.length)+txt.charAt(0);
    segarkan=setTimeout("bergerak()",kecepatan);
  }bergerak();
</script>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='../../img/logo.jpg'></link>
</head>
<body>

<div class="header">
<?php include "header.php"; ?>
</div>
<div class="conten">
<table border='1' bordercolor="black" align='center' cellspacing='6' cellpadding='4' width='300'>
<tr bgcolor="grey">
<center><H3>Kategori Nilai Bobot</H3></center>
<td width="150" align="center">Kategori</td>
<td align="center">Nilai</td>
</tr>
<tr>
<td align="center">Sangat Penting</td>
<td align="center">32</td>
</tr>
<tr>
<td align="center">Penting</td>
<td align="center">22</td>
</tr>
<tr>
<td align="center">Cukup Penting</td>
<td align="center">20</td>
</tr>
<tr>
<td align="center">Kurang Penting</td>
<td align="center">16</td>
</tr>
<tr>
<td align="center">Tidak Penting</td>
<td align="center">10</td>
</tr>
</table>
<?php
include "../../config.php";




	echo "<center><H3>Kriteria dan Bobot</H3></center>
	<table border='1' align='center' cellspacing='6' cellpadding='4'>
	";
$sql2 = mysql_query("SELECT * FROM kriteria");
	//Buat tabel untuk menampilkan hasil
	while ($dt2 = mysql_fetch_array($sql2)) {
	?>
		<tr>
		<td width="100" ><font color='black'><b>Kriteria</b></font></td>
		<td align='center'><?php echo $dt2['c1'];?></td>
		<td align='center'><?php echo $dt2['c2'];?></td>
		<td align='center'><?php echo $dt2['c3'];?></td>
		<td align='center'><?php echo $dt2['c4'];?></td>
		<td align='center'><?php echo $dt2['c5'];?></td>
		<td align='center'><?php echo $dt2['c6'];?></td>
		<td align='center'><a href="ukriteria.php?id_kriteria=<?php echo $dt2['id_kriteria']; ?>">Edit</a></td>
		</tr>
		<?php } ?>
<?php


$sql = mysql_query("SELECT * FROM bobot");
	//Buat tabel untuk menampilkan hasil
	while ($dt = mysql_fetch_array($sql)) {
	?>
		<tr>
			<td width="100" ><font color='black'><b>Bobot</b></font></td>
			<td align='center'><?php echo $dt['b1'];?></td>
			<td align='center'><?php echo $dt['b2'];?></td>
			<td align='center'><?php echo $dt['b3'];?></td>
			<td align='center'><?php echo $dt['b4'];?></td>
			<td align='center'><?php echo $dt['b5'];?></td>
			<td align='center'><?php echo $dt['b6'];?></td>
			<td align='center' width='80'><a href="ubobot.php?id_bobot=<?php echo $dt['id_bobot']; ?>">Edit</a>
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