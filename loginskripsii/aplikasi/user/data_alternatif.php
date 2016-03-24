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
<?php include "headeruser.php"; ?>
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
			</center>
		</tr>
		";
	while ($dt = mysql_fetch_array($sql)) {
	?>
		<tr>
			<td  align='center' ><?php echo $dt['id_alternatif'];?></td>
			<td><?php echo $dt['nama'];?></td>
			<td><?php echo $dt['deskripsi'];?></td>
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

