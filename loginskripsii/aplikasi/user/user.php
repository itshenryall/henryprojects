
<html>
<head>
<title>ADMIN</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='../img/icon.jpg'></link>
</head>
<body>
<div id="container">

<div class="header">
<?php include "headeruser.php"; ?>
</div>
<br>
<br>
<br>
<div class="conten">

<?php
include "../../config.php";
$no=$_GET['id'];
$query=mysql_query("select * from user where id='$no'");
?>
<form action="../aksi/user.php" method="post">
<table border="1" align="center">
<?php
while($row=mysql_fetch_array($query)){
?>
<input type="hidden" name="id" value="<?php echo $no;?>"/>
<tr>
<td>Nama</td><td><input type="text" name="a1" value="<?php echo $row['username'];?>" /></td>
</tr>
<tr>
<td>Password</td><td><input type="text" name="a2" value="<?php echo $row['password'];?>" /></td>
</tr>
<tr>
<td><input type="submit" value="UPDATE" name="simpan" /></td>
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

