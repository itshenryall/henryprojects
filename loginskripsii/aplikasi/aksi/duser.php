
<?php
include("../../config.php");

$id = $_GET['id'];
$query = mysql_query("delete from user where id='$id'") or die(mysql_error());

if($query){
echo "
<script language='javascript'>document.location.href='../admin/data_pengguna.php';</script>
";
}else{
echo "
<script language='javascript'>
alert('Gagal Menghapus');
document.location='../admin/data_pengguna.php';
</script>
";

}
?>