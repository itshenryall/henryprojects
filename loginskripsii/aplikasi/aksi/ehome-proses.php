<?php
include "../../config.php";

$isi =$_POST['isi'];

$query= "update data SET isi='$isi' WHERE ID='1'";
	mysql_query($query) or die (mysql_error());
	if($query){
		?><script language="javascript">alert("sukses mengupdate!!!");document.location="../admin/ehome.php";</script><?php
	}else{
		?><script language="javascript">alert("gagal!!!");document.location="ehome.php";</script><?php
	}
?>