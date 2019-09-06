<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: home.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Welcome | Easy Food Management</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We help to provide food</h1>
                            <p>Say No To Food Waste</p>
                            <br/>
                            <a  href="login.php" class="btn btn-danger btn-lg active">Login Here</a>
                            <br>
                            <br>
                            <div ><p>Don't have an account? <a href="signup.php">Sign-Up Here</a></p></div>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                    
                            <div class="thumbnail">
                              
                                
                                <div class="caption">
                                 
                                    <h3><u>Creative Ideas</u></h3>
                                    <br>
                                    <p>

                                        A food waste reduction hierarchy-feeding people
                                         first, then animals, then recycling, then composting-serves to 
                                        show how productive use can be made of much 
                                        of the excess food that is currently contributing 
                                        to leachate and methane formation in landfills.
                                        </p>

                             
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        
                            <div class="thumbnail">
                               
                            <div class="caption">
                         
                                    <h3><u> Good Utilization of waste food</u></h3>
                                    <br>
                                    <p>
                                   
                                                    According to the 'food waste pyramid', 
                                                    ensuring that food is eaten by people is
                                                     the top priority. Failing that, the next best
                                                      thing is to feed it to farm animals.
                                        </p>
                        
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                       
                            <div class="thumbnail">
                                
                            <div class="caption">
                           
                                    <h3><u>Say No To Food Waste</u></h3>
                                    <br>
                                    <p>
                                    
                                            Throwing away food is like stealing
                                             from the table of those who are
                                              poor and hungry.
<br>
<br><br><br>
                                        </p>
                               
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>