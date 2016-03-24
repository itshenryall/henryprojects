<?php
include "../../config.php";


$a1=$_POST['id_alternatif'];
$a2=$_POST['nama'];
$a3=$_POST['deskripsi'];


$sql = mysql_query("SELECT * FROM alternatif");
while ($data = mysql_fetch_array($sql)) {  
$z=$data['id_alternatif'];
}

if ($a1 === "$z")
{
echo
"<script language='javascript'>
alert('Maaf Id Sudah Terpakai');
document.location='../tambah_alternatif.php';
</script>";
}
else
{
$query=mysql_query("insert into alternatif (id_alternatif, nama, deskripsi) 
value ('$a1','$a2','$a3')");
if($query){
echo "<script language='javascript'>
alert('Sukses Menyimpan');
document.location='../admin/data_alternatif.php';
</script>";
}else{
echo
"<script language='javascript'>
alert('Gagal Menyimpan');
document.location='../tambah_alternatif.php';
</script>";
}
}
?>