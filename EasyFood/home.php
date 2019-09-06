<?php
 
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
       $em=$_SESSION['email'];	   
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Food waste management</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<style>
     		body {
                      background-image: url("img/lifestylestore_bg.jpg");
                  } 
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
        
        </style>	

    </head>

<body onload="getLocation()">
  <script type="text/javascript">  
    function getLocation(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition);
        }
       }
      
      function showPosition(position)
      {
       document.getElementById("latii").value=+position.coords.latitude;
       document.getElementById("longii").value=+position.coords.longitude;
      }
  </script>
  <?php include("includes/jscript.php"); ?>
  <script>
        const realFileBtn = document.getElementById("real-file");
        const customBtn = document.getElementById("custom-button");
        const customTxt = document.getElementById("custom-text");

        customBtn.addEventListener("click", function() {
        realFileBtn.click();
         });

        realFileBtn.addEventListener("change", function() {
        if (realFileBtn.value) {
        customTxt.innerHTML = realFileBtn.value.match(
        /[\/\\]([\w\d\s\.\-\(\)]+)$/
        )[1];
        } else {
        customTxt.innerHTML = "No file chosen, yet.";
       }
      });
  </script>
  
        <?php
        include 'includes/header.php';
        ?>
  
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Easy Food Management!</h1>
                <p>If you have extra food with you and you dont want your food to get wasted, You are at the right place..!</p>

        </div>


            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                <form action="upload_script.php" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="lati" id="latii" />
                    <input type="hidden" name="longi" id="longii" />  

                    <div class="form-group">
                    <h4 style="color:red">Please Enter The Food Image : </h4>
                    <input type="file" id="custom-button"  name="image" required = "true" />
                    </div>

                    <div class="form-group">
                        <h4 style="color:red">Add Its Description :</h4>
                        <textarea style=" resize: none; color:black;"  name="description" rows="4" cols="30">
                        </textarea>      
                    </div>

                    <button type="submit" name="subm" id="subm" class="btn btn-primary">Upload</button><br><br>

              </form>
                </div>
            </div>

               
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

        <?php include("includes/footer.php"); ?>
    </body>

</html>
