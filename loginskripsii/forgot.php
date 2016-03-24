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
<style>
body {background:#C1392B; padding:0px; margin:0px}
h3 {color:#ffffff; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:20px; margin:20px;}
.wrapper-f{width:300px; margin:auto; padding:40px 20px 20px 20px; background:#E84C3D; margin-top:5%; min-height:120px;}
.wrapper-f label {color:#ffffff;}
.wrapper-f input {padding:5px; background:#eeeeee; border:0px; color:#333; width:98%; margin-bottom:10px;}
.wrapper-f input:focus{ background:#ccc;}
.wrapper-f .button {padding:10px 20px 10px 20px; color:#ffffff; background:#C1392B; margin-top:10px; cursor:pointer}
.wrapper-f .button:hover {background:#333;}
.warning {background:#FF9900; color:#ffffff; padding:10px; border-radius:5px; border:1px; text-align:center;margin:auto;
 width:400px; margin-top:20px;}
</style>


</body>


 </div> 
<br><br>
<?php include "header.php"; ?>
<br><br><br><br>


 <div class="neighborhood-guides">
  

<br>
<br><br><br>
     <div class="container"><h2><font style="color:#339966;"><i class="fa fa-eye fa-3x"></i>Reset Password</h2>

<div></div>
     
</font>
    <h6><i><font style="color:#339966;">Silahkan Inputkan Email Anda Untuk Mereset Password</font></i></h6>
    <p></p>




<div class="row-fluid">
<div 	class="span8">

<div class="row-fluid">
<div class="span4">
</div>
<div class="span10">
    <div class="col-md-11">

        <br>
        <a href="login.php"><b><u><font style="color:#339966;">Kembali</font></b></u></a>
<br><br>

      <div class="thumbnail">

<form action="" method="post">
<label>Masukkan Email</label>
<input name="email" type="email" required="required">
<br><input class="button" name="act_resset" type="submit" value="Submit">
</form>



</div>


</td>


</div>
<div class="span10">



</div>
<div class="span10">



    

       
<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script src="js/bootstrap.js"></script>



<div style="width:600px; margin:auto">
  <div class="thumbnail">
<?PHP 
$server = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'pemilihanbidangkeahlian';
$x = mysql_connect($server,$dbuser,$dbpass) or die(mysql_error());
mysql_select_db($dbname,$x);
///////////////////////////////////////////////////////////////////////
if (isset($_POST['act_resset']))  {
date_default_timezone_set("Asia/Jakarta");
$pass="1A2B4HTjsk5kwhadbwlff"; $panjang='8'; $len=strlen($pass); 
$start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($pass); 
$passwordbaru=substr($yy, $xx, $panjang);

$email = trim(strip_tags($_POST['email']));
$password = mysql_real_escape_string(htmlentities((md5($passwordbaru))));
$datetime=date("h:i:s-j-M-Y");

// mencari alamat email si user
$query = "SELECT * FROM user WHERE email ='$email'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$cek = mysql_num_rows($hasil);
$id = strip_tags($data['id']);
$alamatEmail = strip_tags($data['email']);
$username =trim(strip_tags($data['username']));
if ($cek == 1) {

// title atau subject email
$title  = "Permintaan Password Baru";
// isi pesan email disertai password
$pesan  = "Kami telah meresset Ulang Kata sandi ".$username." Dan anda dapat login kembali ke web kami \n\n 
DETAIL AKUN ANDA :\n Nama Penguna : ".$username." \n 
Kata sandi Anda yang baru adalah: ".$passwordbaru."\n\n 
\n\n PESAN NO-REPLY";
// header email berisi alamat pengirim
$header = "From: nama-website<no-reply@domain.com>";
// mengirim email
$kirimEmail = mail($alamatEmail, $title, $pesan, $header);
// cek status pengiriman email
if ($kirimEmail) { 

    // update password baru ke database (jika pengiriman email sukses)
    $query = "UPDATE user SET password='$password', datetime='$datetime' WHERE id = '$id'";
    $hasil = mysql_query($query);

    if ($hasil) 
  echo'<div class="warning">Kata sandi baru telah direset dan sudah dikirim ke email "'.$alamatEmail.'" Silahkan cek email Anda</div><br><br><hr><h3>CONTOH PESAN DALAM EMAIL<hr><br>
  '.$pesan.'<hr>';
    }
  else {
echo'<div class="warning">Pengiriman Kata sandi baru ke email gagal</div>';
}
}
else{

echo'<div class="warning">Alamat Email tidak ditemukan</div>';
}}


?>
</div>


</div>
</div></div><div></div></div></div></div></div>   

</div>

<div class="footer">
<?php include "footer.php"; ?>
</div>

<body>
</body>
</html>
