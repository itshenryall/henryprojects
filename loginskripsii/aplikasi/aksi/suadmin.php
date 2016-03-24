<?php
include "../../config.php";
$no=$_POST['id'];

$c1=$_POST['a1'];
$c2=$_POST['a2'];


$query=mysql_query("update user set username='$c1', password='$c2' where id='$no'");

if($query){
echo "<script language='javascript'>
alert('Sukses Menyimpan');
document.location='../admin/admin.php';
</script>";
?>
<?php
}else{
echo
"<script language='javascript'>
alert('Gagal Menyimpan');
document.location='../admin/admin.php';
</script>";
}
?>