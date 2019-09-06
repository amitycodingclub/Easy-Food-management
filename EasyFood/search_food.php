<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
   header('location: index.php');
}
       $em=$_SESSION['email'];	   
	
if(isset($_POST['subm']))
   {
    $l1 = $_POST['lats'];
    $l2 = $_POST['longs'];
    header("Location: nearest.php? lat=$l1&long=$l2");
   }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Food waste management</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
   .body{
    background-image: url("img/mybg4.jpg");
    width:100%;
    height:100%;
   }
</style>
</head>

<body class="body" onload="getLocation()">
<?php
        include 'includes/header.php';
        ?>
<section class="cd-hero">
        <ul class="cd-hero-slider">  
            <li class="selected first-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                  
                    <div>
                    <center> <h2>You can help someone</h2></center>
                   <center>  <h3>Click on the button below :</h3></center>
                     </div>
                    <div class="container">
            <div class="col-md-8 ">
	            <div class="col-md-2 col-md-offset-7">
                   <div>     
                      <div class="panel-body">

                      <?php include("includes/user_display.php"); ?>

                    
                       </div>
                     </div>
                   </div>
                 </div>
              </div>
              </li>
              </ul>
              </section>
            



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="css/script.js"></script>
<br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br>
    <?php
        include 'includes/footer.php';
        ?>
    <?php include("includes/jscript.php"); ?>

</body>
</html>