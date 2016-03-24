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

<?php
include "../../config.php";

$sql = mysql_query("SELECT * FROM alternatif");
	//Buat tabel untuk menampilkan hasil
	echo "<center><H3>Data Bidang Keahlian</H3></center>
	<table border='1' align='center'>
		<tr><center>
			<th width='120'><center>ID Bidang</center></th>
			<th width='180'><center>Nama Bidang</center></th>
			<th><center>Deskripsi</center></th>
			<th><center>Edit</center></th>
			<th><center>Delete</center></th>
			</center>
		</tr>
		";
	while ($dt = mysql_fetch_array($sql)) {
	?>
		<tr>
			<td  align='center' ><?php echo $dt['id_alternatif'];?></td>
			<td><?php echo $dt['nama'];?></td>
			<td><?php echo $dt['deskripsi'];?></td>
			<td align='center' width='80'><a href="edit_alternatif.php?id_alternatif=<?php echo $dt['id_alternatif']; ?>">Edit</a></td>
			<td><a href="../aksi/dalternatif.php?id_alternatif=<?php echo $dt['id_alternatif']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a></td>
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