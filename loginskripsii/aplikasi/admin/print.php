<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
<title>Data Nilai Mahasiswa</title>
<link rel="stylesheet" type="text/css" href="print.css" />
<link rel="stylesheet" type="text/css" href="Style.css" />
<br>
</head>
<body onLoad="window.print()">
<h1>Data Nilai Hasil Mahasiswa</h1>
<?php $date=date("l, d F Y, h:i:s");
include "../../config.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$query=mysql_query("SELECT * from penilaian where username like '%$cari%'");
echo "<pre>";
echo "Tanggal dan Waktu: $date <br>";
?>

<table border="1"class="tble">           
<tr align=center>
			<td><b>ID</b></td><td><b>Nama Mahasiswa</b></td><td><b>Nama Bidang</b></td><td><b>Nilai</b></td>
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
</body>
</html>
