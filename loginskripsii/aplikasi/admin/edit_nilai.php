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
<title>ADMIN</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='../img/icon.jpg'></link>
</head>
<body>

<div class="header">
<?php include "header.php"; ?>
</div>

<div class="conten">

<?php
include "../config.php";
$id_nilai=$_GET['id_nilai'];
$query=mysql_query("select * from penilaian where id_nilai='$id_nilai'");
?>
<form action="aksi/supdate_nilai.php" method="post">
<table border="1" align="center">
<?php
while($row=mysql_fetch_array($query)){
?>
<input type="hidden" name="id_nilai" value="<?php echo $id_nilai;?>"/>
<tr>
<th>Nama</th><th>Kemampuan</th><th>Skill</th><th>Teori</th><th>Mental</th><th>Pemilih bidang</th><th>Tingkat Kesulitan</th>
</tr>

<tr>
<td><?php echo $row['nama'];?></td>
<td><input type="text" name="c1" size="5" value="<?php echo $row['kemampuan'];?>" /></td>
<td><input type="text" name="c2" size="5" value="<?php echo $row['skill'];?>" /></td>
<td><input type="text" name="c3" size="5" value="<?php echo $row['teori'];?>" /></td>
<td><input type="text" name="c4" size="5" value="<?php echo $row['mental'];?>" /></td>
<td><input type="text" name="c5" size="5" value="<?php echo $row['pemilih_bidang'];?>" /></td>
<td><input type="text" name="c6" size="5" value="<?php echo $row['tingkat_kesulitan'];?>" /></td>
</tr>
<tr>
<td><input type="submit" value="UPDATE" name="simpan" /></td>
</tr>
</table>
<?php
}
?>
<br>

	<?php
	echo "
	<center><b><font color='green'>Keterangan Nilai:</font></b></center>
  <br>
<table border='1' align='center'>
  <tr>
    <th width='175' height='28'>Kemampuan</th>
    <th width='163'>Skill </th>
    <th width='163'>Teori</th>
    <th width='163'>Mental </th>
    <th width='163'>Pemilih Bidang</th>
    <th width='163'>Tingkat Kesulitan</th>
  </tr>
  <tr>
    <td valign='top'>
<pre>
Sangat Baik : 24
Baik	    : 20-23
Cukup	    : 16-19
Kurang	    : 8-15
Buruk	    : 0-8 
</pre>
	</td>
    <td valign='top'>
<pre>
Sangat Baik : 9 - 10
Baik	    : 7 - 8
Cukup	    : 5 - 6
Kurang	    : 3 - 4
Buruk	    : 1 - 2
</pre>
	 </td>
    <td valign='top'>
<pre>
Sangat Baik : 9 - 10
Baik	    : 7 - 8
Cukup	    : 5 - 6
Kurang	    : 3 - 4
Buruk	    : 1 - 2
</pre>
	 </td>
    <td valign='top'>
<pre>
Sangat Baik : 9 - 10
Baik	    : 7 - 8
Cukup	    : 5 - 6
Kurang	    : 3 - 4
Buruk	    : 1 - 2
</pre>
	 </td>
    <td valign='top'> 
<pre>
Sangat Baik : 9 - 10
Baik	    : 7 - 8
Cukup	    : 5 - 6
Kurang	    : 3 - 4
Buruk	    : 1 - 2
</pre>
	 </td>
    <td valign='top'> 
<pre>
Sangat Baik : 9 - 10
Baik	    : 7 - 8
Cukup	    : 5 - 6
Kurang	    : 3 - 4
Buruk	    : 1 - 2
</pre>
  </td>
  </tr>
</table>
	
	";
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