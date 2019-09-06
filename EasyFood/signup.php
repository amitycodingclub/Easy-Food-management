<?php

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Easy Food Management</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
	 		                      
                   
	 </head>
    <body background="bg.jpg" >
    
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2 style="color:blue;">SIGN UP</h2>
                        <form  class="img-responsive" action="signup_script.php" method="POST">
					
                                	 	 	 	 	 	
					
                    <h3 style="color:red;">Individual Details*</h3>
                       
               
                       <div class="form-group">
                           <input class="form-control" placeholder="Your Full Name*" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                       </div>
                       
                       
                       <div class="form-group">
                           <input type="email" class="form-control"  placeholder="E-mail address*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true">
                       </div>
                       
           
                       
                       <div class="form-group">
                           <input type="password" class="form-control" placeholder="Password*" pattern=".{6,}" name="password" required = "true">
                       </div>
                       
                       
                   <h3 style="color:red;">Address*</h3>
                       
                   <div class="form-group">
                           <input class="form-control" placeholder="House no/Flat no.*" name="house"  required = "true" >
                   </div>
                           
                   <div class="form-group">
                           <input type="text" class="form-control"  placeholder="Colony*" maxlength="10" size="10" name="colony" required = "true">
                   </div>
                       
                   
                   <div class="form-group">
                           <input type="text" class="form-control"  placeholder="Pin-code*" maxlength="10" size="10" name="pin" required = "true">
                   </div>
                       
                       
                   <h3 style="color:red;">Contact Details*</h3>
                       
                       
                   <div class="form-group">
                           <input type="text" class="form-control"  placeholder="Contact Number*" maxlength="10" size="10" name="contact" required = "true">
                   </div>
                       
                   <div class="form-group">
                           <input type="text" class="form-control"  placeholder="Whatsapp Number*" maxlength="10" size="10" name="whatsapp" required = "true">
                   </div>
               
                       
                       
                   
                       <br>
                       <br>
                     <center>  <button type="submit" name="submit" class="btn btn-danger">Submit</button></center>
               



                    </form>

               
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <?php include "includes/footer.php"; ?>
    </body>
</html>