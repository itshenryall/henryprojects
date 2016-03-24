<?php
// memulai session
error_reporting(0);
session_start();
if (isset($_SESSION['level']))
{
	// jika level admin
	if ($_SESSION['level'] == "admin")
   {   


?>
<html>
<head>
<title>Pemilihan Bidang Keahlian</title>
<script language='JavaScript'>
  var txt=" SPK Pemilihan Bidang Keahlian |  ";
  var kecepatan=200;var segarkan=null;
  function bergerak() { document.title=txt;
    txt=txt.substring(1,txt.length)+txt.charAt(0);
    segarkan=setTimeout("bergerak()",kecepatan);
  }bergerak();
</script>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='../../img/logo.jpg'></link>
<script src="../ckeditor/ckeditor.js"></script>
</head>
<body>


<div class="header">
<?php include "header.php"; ?>
</div>
<div class="conten">

<?php 
include "../../config.php";

$query=mysql_query("select * from data where ID='2'");
while($ds=mysql_fetch_array($query)){
?>
	
	<form method="POST" action="../aksi/eket-proses.php">
				<table width="100%"  border="1" align="center" cellpadding="5" cellspacing="0">
				 
								<tr>
									<td>
										<textarea class='ckeditor' id='isi' name='isi'>
										<?php echo $ds['isi'];?>
										</textarea>
									</td>
								</tr>
								
				</td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					<input type="submit" name="kirim" value="UPDATE" />
				</td>
			</tr>
			</table>
	</form>
<?php
}
?>

</div>

<div class="footer">
<?php include "footer.php"; ?>
</div>


</div>


</body>
</html>

<?php
   }
   else if ($_SESSION['level'] == "user")
   {
       header('location:../user/homeuser.php');
   }
   else
{
	?><script language="javascript">
	alert("Halaman Admin, Silahkan LOGIN");
	document.location="../../login.php";
	</script>
	<?php
}
}  
if (!isset($_SESSION['level']))
{
	header('location:../../login.php');
}
?>