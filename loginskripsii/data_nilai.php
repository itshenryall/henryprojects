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
     <div class="container"><h2><font style="color:#339966;"><i class="fa fa-table fa-3x"></i>Informasi Data Kriteria</h2>

<div></div>
     
</font>
    <h6><i><font style="color:#339966;">Aplikasi SPK Pemilihan Bidang Keilmuan Untuk Skripsi</font></i></h6>
    <p></p>
    <br>
    <br>
    <br>

    <div class="row">
      <div class="col-md-8">
      <div class="thumbnail">
 
<?php
include "config.php";


$sql = mysql_query("SELECT * FROM penilaian");
  //Buat tabel untuk menampilkan hasil
  echo "<center><H3>Tabel Data Kriteria</H3></center>
  <table border='1' align='center'>
    <tr>
      <th>Nama Kriteria</th>
      <th>kemampuan</th>
      <th>Skill praktek</th>
      <th>Teori</th>
      <th>Mental</th>
      <th>Pemilih Bidang</th>
      <th>Tingkat Kesulitan</th>
    </tr>
    ";
  while ($dt = mysql_fetch_array($sql)) {
  ?>
    <tr>
      <td width='200'><?php echo $dt['nama'];?></td>
      <td align='center'><?php echo $dt['kemampuan'];?></td>
      <td align='center'><?php echo $dt['skill'];?></td>
      <td align='center'><?php echo $dt['teori'];?></td>
      <td align='center' width='120'><?php echo $dt['mental'];?></td>
      <td align='center'><?php echo $dt['pemilih_bidang'];?></td>
      <td align='center'><?php echo $dt['tingkat_kesulitan'];?></td>
    </tr>
  <?php
  }
  echo "</table>";
  echo "<br>";
  ?>
      </h5></div></div>
      <br><br><br></div></div>
 <div class="footer">
<?php include "footer.php"; ?>
</div>













