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

<div class="conten">
<?php
include "../../config.php";
$username = $_SESSION['username'];
$sql = mysql_query("SELECT * FROM penilaian where username ='$username'");
	//Buat tabel untuk menampilkan hasil
	echo "<center><H3>Data Nilai</H3></center>
	<table border='1' align='center'>
		<tr>
			<th>NAMA</th>
			<th>nilai</th>
			<th>Skill</th>
			<th>Teori</th>
			<th>minat</th>
			<th>Pemilih Bidang</th>
			<th>Tingkat Kesulitan</th>
		</tr>
		";
	while ($dt = mysql_fetch_array($sql)) {
	?>
		<tr>
			<td><?php echo $dt['nama'];?></td>
			<td align='center'><?php echo $dt['nilai'];?></td>
			<td align='center'><?php echo $dt['skill'];?></td>
			<td align='center'><?php echo $dt['teori'];?></td>
			<td align='center'><?php echo $dt['minat'];?></td>
			<td align='center'><?php echo $dt['pemilih_bidang'];?></td>
			<td align='center'><?php echo $dt['tingkat_kesulitan'];?></td>
		</tr>
	<?php
	}
	echo "</table>";
	echo "<br>";
echo "<br>";
	$query = mysql_query("SELECT * FROM bobot");
		while($tampil = mysql_fetch_array($query))
		{
			$b1 = $tampil['b1'];
			$b2 = $tampil['b2'];
			$b3 = $tampil['b3'];
			$b4 = $tampil['b4'];
			$b5 = $tampil['b5'];
			$b6 = $tampil['b6'];
			$total = "$b1"+"$b2"+"$b3"+"$b4"+"$b5"+"$b6";
			$p1="$b1"/"$total"; $p2="$b2"/"$total"; $p3="$b3"/"$total"; $p4="$b4"/"$total"; $p5="$b5"/"$total"; $p6="$b6"/"$total";
			$b=1;
			$c=1;
			
			$bbaru1=round("$p1"/"$b",4); $bbaru2=round("$p2"/"$c",4); $bbaru3=round("$p3"/"$b",4); 
			$bbaru4=round("$p4"/"$c",4); $bbaru5=round("$p5"/"$b",4); $bbaru6=round("$p6"/"$c",4);
			
			echo
			"
			<center><H3>Normalisasi Bobot</H3></center>
			<table border='1' align='center'>
			<tr>	<th>Kriteria</th>
					<th align='center'>nilai</th>
					<th align='center'>Skill</th>
					<th align='center'>Teori</th>
					<th align='center'>minat</th>
					<th align='center'>Pemilih Bidang</th>
					<th align='center'>Tingkat Kesulitan</th>
				</tr>
				<tr>
					<td>Bobot</td>
					<td align='center'>$b1</td>
					<td align='center'>$b2</td>
					<td align='center'>$b3</td>
					<td align='center'>$b4</td>
					<td align='center'>$b5</td>
					<td align='center' >$b6</td>
				</tr>				
				<tr>
					<td>Bobot Baru</td>
					<td align='center'>$bbaru1</td>
					<td align='center'>$bbaru2</td>
					<td align='center'>$bbaru3</td>
					<td align='center'>$bbaru4</td>
					<td align='center'>$bbaru5</td>
					<td align='center'>$bbaru6</td>
				</tr>
				</table>
			";
		}
echo "<br>";
echo "<br>";
	
	$sql2 = mysql_query("SELECT * FROM penilaian where username ='$username'");
//Buat tabel untuk menampilkan hasil
echo "<H3> <center>Hasil Perhitungan Nilai Dengan Bobot</center></H3>
<table border='1' align='center'>
    <tr color='red'>
        <th width='30'>No</th><th width='150'>NAMA</th><th>Nilai Pertama</th>
    </tr>
";
$no = 1;
$i = 0;
$nilai = array();
while ($data = mysql_fetch_array($sql2)) {
    $nilai[$i]= pow($data['nilai'],$bbaru1) * pow($data['skill'],$bbaru2) *
    			 pow($data['teori'],$bbaru3) * pow($data['minat'],$bbaru4) *
    			 pow($data['pemilih_bidang'],$bbaru5) * pow($data['tingkat_kesulitan'],$bbaru6);
    echo "<tr>
        <td align='center'>$no</td><td>".$data['nama']."</td><td align='center' width='79'>".round($nilai[$i],4)."</td>
    </tr>";
$no++;
$i++;
}
echo "</table>";

echo "<H3><center>Hasil Perhitungan Akhir</center></H3>";

$jml=round(array_sum($nilai),4);
$sql3 = mysql_query("SELECT * FROM penilaian where username ='$username' ");
//Jumlah Nilai S = $jml

echo "

<table border='1' align='center'>
    <tr >
        <th width='30'>No</th><th width='150'>NAMA</th><th width='100'>Nilai Akhir</th>
    </tr>
";
$no = 1;
$i=0;

//Kita gunakan rumus (si/ jml si)
while ($data = mysql_fetch_array($sql3)) {
    echo "<tr>
        <td align='center'>".$no."</td><td>".$data['nama']."</td>
        <td align='center'>".round($nilai[$i]/ $jml,4)."</td>
    </tr>";
$no++;
$i++;   
}
echo "</table>";
?>

</div>
<br>
<br>
<br>
<div class="footer">
<?php include "footer.php"; ?>
</div>	
</div>
</body>
</html>
