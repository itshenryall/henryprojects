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
<title>Print dan Preview</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='../img/icon.jpg'></link>

<script type="text/javascript">
var s5_taf_parent = window.location;
function popup_print(){
window.open(‘print.php’,’page’,’toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes’)
}
</script>

</head>
<body>


<div class="header">
<?php include "header.php"; ?>
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
$query = mysql_query("SELECT * FROM penilaian where username like '%$cari%' ");
?>
<a href="javascript:window.print()"><input type='button' value='Print dan Preview'>
	<br>
<table border="1" border color="black">
		<tr align=center>
			<td width='30'><b>ID</b></td><td width='150'><b>Nama Mahasiswa</b></td><td width='240'><b>Nama Bidang</b></td><td width='100'><b>Nilai</b></td>
		</tr>
		<?php
		while ($hasil=mysql_fetch_array($query))
		{
			$id=$hasil['id_nilai'];
			$username=$hasil['username'];
			$nama=$hasil['nama'];
			$nilai=$hasil['jumlah'];
			
			
			echo "<tr><td>$id</td><td>$username</td><td>$nama</td>
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