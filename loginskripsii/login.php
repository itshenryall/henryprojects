



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
 <title></title>
 <script type="text/javascript" src="excanvas.js"></script>

 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/bootstrap-responsive.css">
</head>
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
<br><br>
<?php include "header.php"; ?>
<br><br><br><br>
<div class="neighborhood-guides">
 <br>
 <br><br><br>
 <div class="container"><h2><font style="color:#339966;"><i class="fa fa-edit fa-3x"></i>Login Aplikasi</h2>
  <div></div>
 </font>
 <h6><i><font style="color:#339966;"><img src="img/logo.jpg" > Silahkan Login Untuk Menginput Nilai</font></i></h6>
 <p></p>
 <div class="row-fluid">
  <div class="span8">
   <div class="row-fluid">
    <div class="span4">
    </div>
    <div class="span10">
     <div class="col-md-11">
      <br>
      <font style="color:#339966;"><B><a href="forgot.php"><font style="color:#339966;">Lupa Kata Sandi Anda ?</font></a></b> atau <B><a href="daftar.php"><font style="color:#339966;">Belum Mendaftar ?</font></a></b></font>
      <br><br>
      <div class="thumbnail">
       <table>
        <tr>
         <form method="POST" action="session.php">
          <table border="0">
           <tr>
            <td ><br></td>
           </tr>
           <tr>
            <td>Username  : </td>
            <td><pre><input type="text" name="username" /></td> 
           </tr>
           <tr>
            <td>Password  :</td>
            <td><pre><input type="password" name="pass" /></td>
           </tr>
           <tr height="35px">
            <td></td>
            <td height="35px"><button><button type="submit" class="btn btn-default"> Masuk</button>
            </tr>
           </form> 
          </table>
         </td>
        </div>
        <div class="span10">
        </div>
        <div class="span10">
        </div>
       </div></div><div></div></div></div></div></div>   
       <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
       <script src="js/bootstrap.js"></script>
       <div class="footer">
        <?php include "footer.php"; ?>
       </div>
      </body>
      <html>