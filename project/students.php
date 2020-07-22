<?php

require_once ("php\db.php");
$con = Createdb();
function res(){
	$reg = $_POST['reg'];
    $sql = "SELECT * FROM students where Student_Reg='$reg' ";

    $result = mysqli_query($GLOBALS['con'], $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
	
    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">
	
	<link rel="stylesheet" href="php/style.css">

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
                                <h3>Students Form</h3>
                                <p></p>
                            </div><!-- end title -->
                            
                            <form class="big-contact-form" role="search" method="POST">
                                <input type="text" class="form-control" placeholder="Your Registration Num.." name="reg" >
								<input type="submit" class="btn btn-primary" value="Search" name="res">
                            </form>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
				   <div class="d-flex table-data ">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Student Reg</th>
                        <th>Student Name</th>
                        <th>Student Semester</th>
                        <th>Computer Arc AND Org Marks</th>
                        <th>Numerical Computing Marks</th>
                        <th>Web Development Marks</th>
                        <th>Operating System Marks</th>
                        <th>Network Security Marks</th>
                        <th>Database System Marks</th>
                    </tr>
                </thead>
                <tbody id="tbody" >
                   <?php


                   if(isset($_POST['res'])){
                       $result = res();

                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>

                               <tr>
                                   <td data-id="<?php echo $row['reg']; ?>"><?php echo $row['id']; ?></td>
                                   <td data-id="<?php echo $row['reg']; ?>"><?php echo $row['Student_Reg']; ?></td>   
                                   <td data-id="<?php echo $row['reg']; ?>"><?php echo $row['Student_Name']; ?></td>
                                   <td data-id="<?php echo $row['reg']; ?>"><?php echo $row['Student_Semester']; ?></td>
                                   <td data-id="<?php echo $row['reg']; ?>"><?php echo $row['Computer_Arc_AND_Org']; ?></td>
                                   <td data-id="<?php echo $row['reg']; ?>"><?php echo $row['Numerical_Computing']; ?></td>  
                                   <td data-id="<?php echo $row['reg']; ?>"><?php echo $row['Web_Development']; ?></td>
                                   <td data-id="<?php echo $row['reg']; ?>"><?php echo $row['Operating_System']; ?></td>
                                   <td data-id="<?php echo $row['reg']; ?>"><?php echo $row['Network_Security']; ?></td>
                                   <td data-id="<?php echo $row['reg']; ?>"><?php echo $row['DATABASE_System']; ?></td>
                               </tr>

                   <?php
                           }

                       }
					   else
						   echo "<script>alert('Req N0 Not Found');</script>";
                   }


                   ?>
                </tbody>
            </table>
        </div>
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