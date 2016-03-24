
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



<?php
include "../../config.php";
?>
<?php
$username = $_SESSION['username'];
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

<div class="conten">
<a href="hasil.php"><u><b>Kembali</b></u></a>
<br>
<br>
	<?php $date=date("l, d F Y.");
	echo "<pre>";
	echo "Tanggal dan Waktu: $date <br>";
	?>
	<br>
<?php
mysql_connect("localhost","root","");
mysql_select_db("pemilihanbidangkeahlian");
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$cari = trim($_POST['cari']);
$n="$username";
$query = mysql_query("SELECT * FROM penilaian where username = '$n' AND nama  like '%$cari%' ");
?>
<table border="1" border color="black">
		<tr align=center>
			<td><b>ID</b></td><td><b>Nama Alternatif</b></td><td><b>Nilai</b></td>
		</tr>
		<?php
		while ($hasil=mysql_fetch_array($query))
		{
			$id=$hasil['id_nilai'];
			$nama=$hasil['nama'];
			$nilai=$hasil['jumlah'];
			
			
			echo "<tr><td>$id</td><td>$nama</td>
			<td>$nilai</td></tr>";


		}
		?>

	</table>

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