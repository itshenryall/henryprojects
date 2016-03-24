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
<?php include "header.php"; ?>
</div>

<div class="conten">

<form method="post" action="../aksi/simpan_alternatif.php">
<pre>
ID Bidang	<input type="text" name="id_alternatif" required="required" maxlength="5" onKeyPress="return goodchars(event,'1234567890',this)"/><br>
Nama Bidang	<input type="text" name="nama" required="required" maxlength="100" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)"/><br>
Deskripsi
		<textarea name="deskripsi" rows="5" required="required" maxlength="50"/></textarea>
</pre>
  <br />
    <input type="submit" name="submit" value="SIMPAN" /> <input type="reset" name="hapus" value="RESET" />
</form>
</div>
<br>
<br>
<br>
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