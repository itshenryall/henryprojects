<?php
include "../../config.php";
$no=$_POST['id_bobot'];
$c1=$_POST['a1'];
$c2=$_POST['a2'];
$c3=$_POST['a3'];
$c4=$_POST['a4'];
$c5=$_POST['a5'];
$c6=$_POST['a6'];

$query=mysql_query("update bobot set b1='$c1', b2='$c2', b3='$c3', b4='$c4', b5='$c5', b6='$c6' where id_bobot='$no'");

if($query){
echo "<script language='javascript'>
alert('Sukses Menyimpantttt');
document.location='seleksi.php';
</script>";
?>
<?php
}else{
echo
"<script language='javascript'>
alert('Gagal Menyimpan');
document.location='../data_kriteria.php';
</script>";
}
?>