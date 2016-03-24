<?php
include "../../config.php";

$a1=$_POST['id'];
$a2=$_POST['nama'];
$a3=$_POST['email'];
$a4=$_POST['pass'];
$a5=$_POST['level'];



$query=mysql_query("insert into user (id, username, email, password, level) 
value ('$a1','$a2','$a3','$a4','$a5')");

if($query){
echo "<script language='javascript'>
alert('Sukses Menyimpan');
document.location='../admin/tambah_user.php';
</script>";
?>
<?php
}else{
echo
"<script language='javascript'>
alert('Gagal Menyimpan');
document.location='../tambah_user.php';
</script>";
}
?>

