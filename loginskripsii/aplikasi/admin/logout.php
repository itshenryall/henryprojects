<?php session_start();
if ($_SESSION['level'] == "admin")
{	
	session_destroy();
	//session_destroy();
	?><script language="javascript">
	alert("Anda Berhasil logout");
	document.location="../index.php";
	</script><?php
	
}
else{
	?><script language="javascript">
	alert("Maaf, Anda Harus Login Terlebih Dahulu");
	document.location="login.php";
	</script>
	<?php
}
?>


