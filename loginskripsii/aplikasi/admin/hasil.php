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

<h4>masukan nama mahasiswa untuk mencari data</h4>
<form name="form1" method="post" action="hasilcari.php" height="500px" bgcolor="white">
<input name="cari" type="text" value="" bgcolor="white">
<input type="submit" name="Submit" value="Cari" />
</form>
<form action="cetakhasil.php"><input type="submit" value="Print dan Preview" onClick="popup_print()" />
<?php
include "../../config.php";
$sql = mysql_query("SELECT * FROM penilaian");
$sql1 = mysql_query("Select * from alternarif");
	//Buat tabel untuk menampilkan hasil
	echo "<center><H3>Data Hasil</H3></center>
	<table border='1' align='center'>
		<tr>
			<th width='50'>No</th>
			<th width='150'>Nama</th>
			<th width='215'>Nama Bidang</th>
			<th width='100'>Nilai</th>


		</tr>
		";
		$no = 1;
	while ($dt = mysql_fetch_array($sql )) {
	?>
		<tr>
			<td align='center'><?php echo $no;?></td>
					<td align='center'><?php echo $dt['username'];?></td>
			<td ><?php echo $dt['nama'];?></td>
			<td align='center'><?php echo $dt['jumlah'];?></td>

		</tr>
	<?php
	$no++;
	}
	echo "</table>";
	echo "<br>";
	?>


</div>

<div class="footer">
<?php include "footer.php"; ?>
</div>


</div>

<br><br><br><br>
</body>
</html>
