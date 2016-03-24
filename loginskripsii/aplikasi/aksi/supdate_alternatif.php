<?php
include "../../config.php";
$id_alternatif=$_POST['id_alternatif'];


$a1=$_POST['a1'];
$a2=$_POST['a2'];

$query=mysql_query("update alternatif set  nama='$a1', deskripsi='$a2' where id_alternatif='$id_alternatif'");

if($query){
echo "<script language='javascript'>
alert('Sukses Menyimpan');
document.location='../admin/data_alternatif.php';
</script>";
?>
<?php
}else{
echo
"<script language='javascript'>
alert('Gagal Menyimpan');
document.location='../admin/data_alternatif.php';
</script>";
}
?>
