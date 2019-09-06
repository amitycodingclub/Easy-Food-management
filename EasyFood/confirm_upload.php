<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
       $em=$_SESSION['email'];	   
?>

<!DOCTYPE html>
<html>
    <html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Products | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		
<style>
    #custom-button {
      width:200px;
  padding: 10px;
  color: black;
  background-color: #009578;
  border: 1px solid #000;
  border-radius: 10px;
  cursor: pointer;

}

#custom-button:hover {
  background-color: #00b28f;
}

#custom-text {
  font-family: sans-serif;
  color: #aaa;
}
</head>
    </style>
<body>

<?php include("includes/header.php"); ?>



  <center><h2>Thanks for adding your waste food .</h2></center>
  <center><h3>It may help someone also save your food from getting waste.</h3></center>
  <br><br>
  <center><button type="submit" class="btn btn-primary"><a style="color:white;"href="home.php">Back to home</a></button></center>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br><br>
<br>
<br><br>
<br>
<br>

<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>

    <?php include("includes/footer.php"); ?>
    <?php include("includes/jscript.php"); ?>


</body>
</html>