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
<?php include "../../config.php";?>
<?php
$username = $_SESSION['username'];
$sql = mysql_query("SELECT * FROM penilaian where username ='$username'");
$sql11 = mysql_query("SELECT * FROM kriteria");
	//Buat tabel untuk menampilkan hasil
while ($dt2 = mysql_fetch_array($sql11)) {
  ?>
	<center><H3>Data Nilai</H3></center>
	<table border='1' align='center'>
		<tr>
			<th><center>Nama Bidang</center></th>
			<th><center><?php echo $dt2['c1'];?></center></th>
			<th width='150'><center><?php echo $dt2['c2'];?></center></th>
			<th><center><?php echo $dt2['c3'];?></center></th>
			<th><center><?php echo $dt2['c4'];?></center></th>
			<th><center><?php echo $dt2['c5'];?></center></th>
			<th><center><?php echo $dt2['c6'];?></center></th>
			<th><center>Edit</center></th>
			<th><center>Delete</center></th>
		</tr>
		<?php } ?>
		
		<?php
	while ($dt = mysql_fetch_array($sql)) {
	?>
		<tr>
			<td width='200'><?php echo $dt['nama'];?></td>
			<td align='center'><?php echo $dt['nilai'];?></td>
			<td align='center'><?php echo $dt['skill'];?></td>
			<td align='center'><?php echo $dt['teori'];?></td>
			<td align='center' width='120'><?php echo $dt['minat'];?></td>
			<td align='center'><?php echo $dt['pemilih_bidang'];?></td>
			<td align='center'><?php echo $dt['tingkat_kesulitan'];?></td>
			<td align='center' width='80'><a href="../aksi/edit_nilai.php?id_nilai=<?php echo $dt['id_nilai']; ?>">Edit</a></td>
			<td><a href="../aksi/dnilai.php?id_nilai=<?php echo $dt['id_nilai']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a>
			</td>
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
