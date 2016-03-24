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
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='../../img/logo.jpg'></link>
</head>
<body>
<?php include "headeruser.php"; ?>
<br>
<br><br>




<div class="conten">
<center>
<h1><marquee><font color="#666666";>Selamat Datang Di Halaman User</font></marquee></h1>
</center>
</div>

<div class="footer">
<?php include "footer.php"; ?>
</div>


</div>


</body>
</html>
