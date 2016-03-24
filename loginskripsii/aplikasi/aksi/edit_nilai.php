<?php
// memulai session
error_reporting(0);
session_start();
if (isset($_SESSION['level']))
{
  // jika level admin
  if ($_SESSION['level'] == "user")
   {   


?>

<div class="header">
<?php include "header.php"; ?>
</div>
<html>
<head>
<title>ADMIN</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='../img/icon.jpg'></link>
<link rel="stylesheet" href="../user/bootstrap.min.css">
</head>
<body>



<div class="conten">
<br>
<br>
<br>
<br>
<?php
include "../../config.php";
$id_nilai=$_GET['id_nilai'];
$query=mysql_query("select * from penilaian where id_nilai='$id_nilai'");
?>
<form action="supdate_nilai.php" method="post">
<table border="1" align="center">
<?php
while($row=mysql_fetch_array($query)){
?>
<input type="hidden" name="id_nilai" value="<?php echo $id_nilai;?>"/>
<tr>
<th>Nama</th><th>Nilai</th><th>Skill</th><th>Teori</th><th>Minat</th><th>Pemilih bidang</th><th>Tingkat Kesulitan</th>
</tr>

<tr>
<td><?php echo $row['nama'];?></td>
<td><input type="text" name="c1" size="5" value="<?php echo $row['nilai'];?>" /></td>
<td><input type="text" name="c2" size="5" value="<?php echo $row['skill'];?>" /></td>
<td><input type="text" name="c3" size="5" value="<?php echo $row['teori'];?>" /></td>
<td><input type="text" name="c4" size="5" value="<?php echo $row['minat'];?>" /></td>
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
    <th width='175' height='28'>Nilai</th>
    <th width='163'>Skill </th>
    <th width='163'>Teori</th>
    <th width='163'>Minat </th>
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
Sangat Baik : 90 - 100
Baik	    : 70 - 80
Cukup	    : 50 - 60
Kurang	    : 30 - 40
Buruk	    : 0 - 20
</pre>
	 </td>
    <td valign='top'>
<pre>
Sangat Baik : 90 - 100
Baik	    : 70 - 80
Cukup	    : 50 - 60
Kurang	    : 30 - 40
Buruk	    : 0 - 20
</pre>
	 </td>
    <td valign='top'>
<pre>
Sangat Baik : 90 - 100
Baik	    : 70 - 80
Cukup	    : 50 - 60
Kurang	    : 30 - 40
Buruk	    : 0 - 20
</pre>
	 </td>
    <td valign='top'> 
<pre>
Sangat Baik : 90 - 100
Baik	    : 70 - 80
Cukup	    : 50 - 60
Kurang	    : 30 - 40
Buruk	    : 0 - 20
</pre>
	 </td>
    <td valign='top'> 
<pre>
Sangat Sulit   : 90 - 100    
Cukup Sulit  : 80 - 90
Tidak Sulit  : 55 - 80
Sangat Mudah   : 0 - 55<br>
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
   else if ($_SESSION['level'] == "admin")
   {
       header('location:../admin/home.php');
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
<br>
<div class="footer">
<?php include "../user/footer.php"; ?>
</div>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../user/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../user/bootstrap.min.js"></script>