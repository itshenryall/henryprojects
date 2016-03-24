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
<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
<title>Data Nilai Mahasiswa</title>
<link rel="stylesheet" type="text/css" href="print.css" />
<link href="style.css" type="text/css" rel="stylesheet" />
<br>
</head>
<body onLoad="window.print()">
<h1><?php echo 'Data Nilai ', $_SESSION['username'] , '  ';?></h1>
<?php $date=date("l, d F Y, h:i:s");
include "../../config.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$username = $_SESSION['username'];
$sql=mysql_query("SELECT * FROM penilaian where username ='$username'order by jumlah desc");
$jumlah=mysql_num_rows($sql);
echo "<pre>";
echo "Tanggal dan Waktu: $date <br>";
echo "Jumlah Record = $jumlah Data Bidang<br><br>";

//Buat tabel untuk menampilkan hasil
	echo "<center><H2>Data Hasil</H2></center>
	<table border='1' align='center'>
		<tr>
			<th width='50'>No</th>
			<th width='215'>Nama Bidang</th>
			<th width='70'>Nilai</th>

		</tr>
		";
		$no = 1;
	while ($dt = mysql_fetch_array($sql)) {
	?>
		<tr>
			<td align='center'><?php echo $no;?></td>
			<td ><?php echo $dt['nama'];?></td>
			<td align='center'><?php echo $dt['jumlah'];?></td>

		</tr>
	<?php
	$no++;
	}
	echo "</table>";
	echo "<br>";
	?> 
<div class="footer">
<?php include "footer.php"; ?>
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