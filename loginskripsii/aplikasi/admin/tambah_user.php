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
</head>
<body>

<div class="header">
<?php include "header.php"; ?>
</div>
<div class="conten">
<a href="data_pengguna.php"><b><u>Lihat Data User</b></u></a>
<br>
<br>
<form method="post" action="../aksi/simpan_user.php">
<pre>
NIM/ID          <input type="number" name="id" required="required"/><br>
Nama		<input type="text" name="nama" required="required"/><br>
Email           <input type="email" name="email" required="required"/><br>
Password	<input type="text" name="pass" required="required"/><br>
Level		<select name="level"><option value="admin">admin<option value="user">user</select></td>
</pre>
  <br />
    <input type="submit" name="submit" value="TAMBAH" /> <input type="reset" name="hapus" value="BATAL" />
</form>
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