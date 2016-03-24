
<?php
include("../../config.php");

$id_nilai = $_GET['id_nilai'];
$query = mysql_query("delete from penilaian where id_nilai='$id_nilai'") or die(mysql_error());

if ($query) 
if($query){
echo "
<script language='javascript'>document.location.href='seleksi.php';</script>
";
}else{
echo "
<script language='javascript'>
alert('Gagal Menghapus');
document.location='../data_nilai.php';
</script>
";

}
?>