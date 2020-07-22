<?php
include ('connection.php');
$obj = new functions();
$obj ->con();

if(isset($_POST['btn']))
{
	$email=$_POST['name'];
	$password=$_POST['pass'];
	
	$obj->login($email,$password);
}

?>
<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Result Management System</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
	
    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>  

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">

	
            <div class="container">
			
                    <div class="row">
					<br/><br/>
					
                    <div class="col">
					<br/><br/></div></div>
        <section class="section gb nopadtop">
		
            <div class="container">
                <div class="boxed boxedp4">


                    
                    <div class="row">
					<br/><br/></div>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="section-title text-center">
                                <h3>Teacher Login</h3>
                                <p></p>
                            </div><!-- end title -->
                            
                            <form class="big-contact-form" role="search" method="post">
                                <input type="text" class="form-control" placeholder="Username.." name="name">
								
                                <input type="password" class="form-control" placeholder="Password.." name="pass">
								<input type="submit" class="btn btn-primary" value="Login" name="btn">
                            </form>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </section>
		</div>

        
   
    </div><!-- end wrapper -->

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAkADq7R0xf6ami9YirAM1N-yl7hdnYBhM "></script>
    <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>

</body>
</html>