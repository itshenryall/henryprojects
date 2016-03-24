
<html>
<head>
<title>ADMIN</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='img/icon.ico'></link>
</head>
<body>

<div class="header">
<?php include "headeruser.php"; ?>
</div>
<div class="conten">
<?php
include "../config.php";
$username = $_SESSION['username'];
$sql = mysql_query("SELECT * FROM user where username ='$username' ");
	//Buat tabel untuk menampilkan hasil
	echo "<center><H3>Data User</H3></center>
	<table border='1' align='center'>
		<tr>
			<th><center>ID User</center></th>
			<th><center>User Name</center></th>
			<th><center>Password</center></th>
			<th><center>Level</center></th>
			<th><center>Edit</center></th>
			<th><center>Delete</center></th>
		</tr>
		";
	while ($dt = mysql_fetch_array($sql)) {
	?>
		<tr>
			<td align='center'><?php echo $dt['id'];?></td>
			<td width='150'><?php echo $dt['username'];?></td>
			<td width='120'><?php echo $dt['password'];?></td>
			<td width='120'><?php echo $dt['level'];?></td>
			<td align='center' width='80'><a href="uadmin.php?id=<?php echo $dt['id']; ?>">Edit</a></td>
			<td align='center' width='80'><a href="aksi/duser.php?id=<?php echo $dt['id']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a></td>
		</tr>
	<?php
	}
	echo "</table>";
	echo "<br>";
	?>

	
</div>

<div class="footer">
<?php include "footer.php"; ?>
</div>


</div>


</body>
</html>

