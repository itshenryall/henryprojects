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
<link rel='icon'  href='img/logo.jpg'></link>
</head>
<body>
<div class="header">
<?php include "header.php"; ?>
</div>


  <head>
    
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="css/styles.css" />
		<link href="css/font-awesome.min.css" rel="stylesheet">

		
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/css.css">



    
  <body>
<img>
    <div class="jumbotron3"><img src="hello.jpg" id="bigpic" /></img>
      <div class="container">
        
	  </div>
	  
	  <style type="text/css">

img#bigpic {
position: fixed;
right: 0;
bottom: 0;
min-width: 100%;
min-height: 100%;
width: auto;
height: auto;
z-index: -100;
}

source {
border: 1px solid blue;
}

</style>




</body>


 </div> 
 <div class="neighborhood-guides">
<br>
<br><br><br>
     <div class="container"><h2><font style="color:#339966;"><i class="fa fa-home fa-3x"></i>Home</h2>

<div></div>
     
</font>
    <h6><i><font style="color:#339966;"><img src="img/logo.jpg" > Aplikasi SPK Pemilihan Bidang Keahlian Untuk Skripsi</font></i></h6>
    <p></p>
    <br>
    <br>
    <br>

    <div class="row">
      <div class="col-md-8">
      <div class="thumbnail">
      <a href="tentang.php"><img src="img/latar.jpg" > </a>
      </div></div>
      <div class="col-md-4">
        <div class="thumbnail">
      <h4><font style="color:#339966;">Latar Belakang</font></h4><br>
      <h5>
      	<?php

				include "config.php";
					$query = mysql_query("select * from data where ID='1'");
					while ($tampil = mysql_fetch_array($query))
					{
					$isi = $tampil['isi'];
					echo "<p><font style='color:#339966;'><align='center'>$isi</center></font></p>";
					}
				?>
      </h5><br></div></div>
      <br><br><br></div></div>

 <div class="footer">
<?php include "footer.php"; ?>
</div>













