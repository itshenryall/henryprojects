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

<link href="css/gayacarousel.css" rel="stylesheet" type="text/css" />
<link href="css/mediaqueries.css" rel="stylesheet" type="text/css" />
<link href="css/carousel.css" rel="stylesheet" type="text/css" />


<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="js/carousel.js"></script>


    
  </head>
    <div class="learn-more">
    <div class="container">
    <div class="row">
      
    
      
      <center><p><a href="http://www.info.unpam.ac.id"><center><font style="color:#666666;"> Copyright &copy; 2015. info.unpam.ac.id </center></a></font></p></center>
      
      </div>
      
      
</i></font>
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


