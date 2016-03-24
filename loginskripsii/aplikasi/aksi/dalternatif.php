
<?php
include("../../config.php");

$id_alternatif = $_GET['id_alternatif'];
$query = mysql_query("delete from alternatif where id_alternatif='$id_alternatif'") or die(mysql_error());

if ($query) 
if($query){
echo "
<script language='javascript'>document.location.href='../admin/data_alternatif.php';</script>
";
}else{
echo "
<script language='javascript'>
alert('Gagal Menghapus');
document.location='../admin/data_alternatif.php';
</script>
";

}
?>