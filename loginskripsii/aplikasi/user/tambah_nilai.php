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
<script language="javascript">
function getkey(e)
{
if (window.event)
   return window.event.keyCode;
else if (e)
   return e.which;
else
   return null;
}
function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;
 
keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();
 
// check goodkeys
if (goods.indexOf(keychar) != -1)
    return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
   return true;
    
if (key == 13) {
    var i;
    for (i = 0; i < field.form.elements.length; i++)
        if (field == field.form.elements[i])
            break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
    };
// else return false
return false;
}
</script>


<div class="header">
<?php include "headeruser.php"; ?>
</div>

<div class="conten">
  <?php
  echo "
  <center><b><font color='grey'>Keterangan Nilai:</font></b></center>
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
Sangat Baik : 90 - 100
Baik        : 70-90
Cukup       : 59-70
Kurang      : 30-59
Buruk       : 0-30 
</pre>
  </td>
    <td valign='top'>
<pre>
Sangat Baik : 90 - 100
Baik        : 70 - 90
Cukup       : 59 - 70
Kurang      : 30 - 59
Buruk       : 0 - 30
</pre>
   </td>
    <td valign='top'>
<pre>
Sangat Baik : 90 - 100
Baik        : 70 - 90
Cukup       : 59 - 70
Kurang      : 30 - 59
Buruk       : 0 - 30
</pre>
   </td>
    <td valign='top'>
<pre>
Sangat Baik : 90 - 100
Baik        : 70 - 90
Cukup       : 59 - 70
Kurang      : 30 - 59
Buruk       : 0 - 30
</pre>
   </td>
    <td valign='top'> 
<pre>
Sangat Baik : 90 - 100
Baik        : 70 - 90
Cukup       : 59 - 70
Kurang      : 30 - 59
Buruk       : 0 - 30
</pre>
   </td>
    <td valign='top'> 
<pre>
Sangat Mudah    : 90 - 100    
Tidak Sulit     : 80 - 90
Cukup Sulit     : 60 - 80
Sangat Sulit    : 0 - 60
<br></pre>
  </td>
  </tr>
</table>
  
  ";
  ?>
  <br>

<form method="post" action="../aksi/simpan_nilai.php">
<pre>
<?php
$username = $_SESSION['username'];
?>
<input type="hidden" name="username" value="<?php echo $username;?>"/>
Nama Bidang	  <select name="alternatif" size="1">
						<?php 
						include "../../config.php";
						
						$query=mysql_query("select * from alternatif order by id_alternatif ");
						
						while($row=mysql_fetch_array($query))
						{
							?><option value="<?php  echo $row['nama']; ?>"><?php  echo $row['nama']; ?></option><?php 
						}
						?>

						</select><br>
            <?php
$sql11 = mysql_query("SELECT * FROM kriteria");
  //Buat tabel untuk menampilkan hasil
  while ($dt2 = mysql_fetch_array($sql11)) {
  ?>
<tr>
<td align='center'><?php echo $dt2['c1'];?>             <input type="text" name="nilai" size="5" required="required" maxlength="3" onKeyPress="return goodchars(event,'1234567890',this)"/><br></td>
<td align='center'><?php echo $dt2['c2'];?>   <input type="text" name="skill_praktek" size="5" required="required" maxlength="3" onKeyPress="return goodchars(event,'1234567890',this)"/><br></td>
<td align='center'><?php echo $dt2['c3'];?>             <input type="text" name="teori" size="5" required="required" maxlength="3" onKeyPress="return goodchars(event,'1234567890',this)"/><br></td>
<td align='center'><?php echo $dt2['c4'];?>             <input type="text" name="minat" size="5" required="required" maxlength="3" onKeyPress="return goodchars(event,'1234567890',this)"/><br></td>
<td align='center'><?php echo $dt2['c5'];?>    <input type="text" name="pemilih_bidang" size="5" required="required" maxlength="3" onKeyPress="return goodchars(event,'1234567890',this)"/><br></td>
<td align='center'><?php echo $dt2['c6'];?> <input type="text" name="tingkat_kesulitan" size="5" required="required" maxlength="3" onKeyPress="return goodchars(event,'1234567890',this)"/></td>
</pre>
<?php } ?>
</tr>
<br />
    <input type="submit" name="submit" value="SIMPAN" /> <input type="reset" name="hapus" value="RESET" />
</form>
</div>
<br>
<div class="footer">
<?php include "footer.php"; ?>
</div>


</div>


</body>
</html>