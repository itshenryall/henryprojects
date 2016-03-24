
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
		}

$username = $_SESSION['username'];
$sql2 = mysql_query("SELECT * FROM penilaian where username ='$username'");
$no = 1;
$i = 0;
$nilai = array();
while ($data = mysql_fetch_array($sql2)) {
    $nilai[$i]= pow($data['nilai'],$bbaru1) * pow($data['skill'],$bbaru2) *
    			 pow($data['teori'],$bbaru3) * pow($data['minat'],$bbaru4) *
    			 pow($data['pemilih_bidang'],$bbaru5) * pow($data['tingkat_kesulitan'],$bbaru6);
$i++;
}
$jml=round(array_sum($nilai),4);
$username = $_SESSION['username'];
$sql3 = mysql_query("SELECT * FROM penilaian where username ='$username'");
$i=0;
while ($data = mysql_fetch_array($sql3)) {
$v=round($nilai[$i]/ $jml,4);
$n="$username";

$query= mysql_query("update penilaian set jumlah = '$v' where username = '$n'");
echo "$v";
$i++;
}
if($query){
echo "<script language='javascript'>
alert('Sukses Menyimpan');
document.location='../user/hasil.php';
</script>";
}else{
echo
"<script language='javascript'>
alert('Gagal Menyimpan');
document.location='../user/tambah_nilai.php';
</script>";
}
?>



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