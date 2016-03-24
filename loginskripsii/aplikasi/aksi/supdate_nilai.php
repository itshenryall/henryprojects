<?php
include "../../config.php";

$id_nilai=$_POST['id_nilai'];

$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$c4=$_POST['c4'];
$c5=$_POST['c5'];
$c6=$_POST['c6'];

$query=mysql_query("update penilaian set nilai='$c1', skill='$c2', teori='$c3', minat='$c4', pemilih_bidang='$c5', tingkat_kesulitan='$c6' where id_nilai='$id_nilai'");

if($query){
echo "<script language='javascript'>
alert('Sukses Menyimpan');
document.location='seleksi.php';
</script>";
?>
<?php
}else{
echo
"<script language='javascript'>
alert('Gagal Menyimpan');
document.location='../edit_nilai.php';
</script>";
}
?>

