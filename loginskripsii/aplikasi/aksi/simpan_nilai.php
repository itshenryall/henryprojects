<?php
include "../../config.php";

$a0=$_POST['username'];
$a1=$_POST['alternatif'];
$c1=$_POST['nilai'];
$c2=$_POST['skill_praktek'];
$c3=$_POST['teori'];
$c4=$_POST['minat'];
$c5=$_POST['pemilih_bidang'];
$c6=$_POST['tingkat_kesulitan'];


$sql = mysql_query("SELECT * FROM penilaian");
while ($data = mysql_fetch_array($sql)) {  
$z=$data['nama'];
}


if ($a1 == "$z")
{
echo
"<script language='javascript'>
alert('Maaf Nama Sudah Ada');
document.location='../user/tambah_nilai.php';
</script>";
}
elseif ($c1 > 100)
{
echo
"<script language='javascript'>
alert('Maaf Nilai nilai harus 1 - 100');
document.location='../user/tambah_nilai.php';
</script>";
}
elseif ($c2 > 100)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Skill Praktek harus 1 - 100');
document.location='../user/tambah_nilai.php';
</script>";
}
elseif ($c3 > 100)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Teori harus 1 - 100');
document.location='../user/tambah_nilai.php';
</script>";
}
elseif ($c4 > 100)
{
echo
"<script language='javascript'>
alert('Maaf Nilai minat harus 1 - 100');
document.location='../user/tambah_nilai.php';
</script>";
}
elseif ($c5 > 100)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Pemilih Bidang harus 1 - 100');
document.location='../user/tambah_nilai.php';
</script>";
}
elseif ($c6 > 100)
{
echo
"<script language='javascript'>
alert('Maaf Nilai Tingkat Kesulitan harus 1 - 100');
document.location='../user/tambah_nilai.php';
</script>";
}

else
{
$query=mysql_query("insert into penilaian (username, nama, nilai, skill, teori, minat, pemilih_bidang, tingkat_kesulitan) 
value ('$a0','$a1','$c1','$c2','$c3','$c4','$c5','$c6')");
if($query){
echo "<script language='javascript'>
alert('Sukses Menyimpan');
document.location='seleksi.php';
</script>";
}else{
echo
"<script language='javascript'>
alert('Gagal Menyimpan');
document.location='../user/tambah_nilai.php';
</script>";
}
}

?>
