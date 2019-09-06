 <?php include 'includes/common.php'; ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Easy Food Management</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<style>
     		body {
                      background-image: url("img/lifestylestore_bg.jpg");
                  } 
		</style>
    </head>

    <body>
        <?php include 'includes/header.php'; ?>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                              
                                <form action="login_script.php" method="POST">
								
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                 <?php 
                                   
                                       if(isset($_GET['error'])){
                                        
                                        ?><p style="color:red;">Enter Correct Id and Password</p><?php
                                
                                        } 
                                 ?>
                            </form>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
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
  
   

        <?php include 'includes/footer.php'; ?>
    </body>
</html>
